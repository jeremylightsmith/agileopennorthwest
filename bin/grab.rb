#!/usr/bin/env ruby

require 'httparty'
require 'csv'

APP_KEY = "TNNBDGRSCHQLLA5TGV"
USER_KEY = "135135617244912288865"

class EventBrite
  include HTTParty
  base_uri "https://www.eventbrite.com/json"

  def get(method, params = {})
    params = params.merge(app_key:APP_KEY).
                    merge(user_key:USER_KEY).
                    map{|k,v| "#{k}=#{v}"}
    self.class.get("/#{method}?#{params.join("&")}")
  end

  def event_list_attendees(id)
    results = get :event_list_attendees, id:id, status:"all"
    results = results.values.first.map{|row| row["attendee"]}
    results.each do |row|
      row["ticket_type"] = case row["discount"]
      when "agilechangesworlds" then "Sponsor"
      when "HostingIsFun" then "Host"
      when "ithinkican" then "Volunteer"
      end
      row["answers"] = Hash[*row["answers"].map{|r| r["answer"]}.map{|r| [r["question"], r["answer_text"]]}.flatten]
    end
    results
  end
end

eid = 9367507467
e = EventBrite.new
p e.event_list_attendees(eid).find{|g| g["first_name"] == "Jean"}

csv_file = File.expand_path(File.dirname(__FILE__) + "/../2014/participants.csv")
CSV.open(csv_file, "wb", force_quotes:true) do |csv|
  csv << ["Last Name",
          "First Name",
          "Ticket Type",
          "IP Location",
          "In which city and state do you spend most of your time?",
          "What's your role when you work (not necessarily job title)?",
          "What's your other?",
          "Your Twitter handle, if you'd like to share it:",
          "Do you have any dietary restrictions we should try to consider?",
          "Company"]

  e.event_list_attendees(eid).each do |a|
    csv << [
      a["last_name"], 
      a["first_name"], 
      a["ticket_type"],
      "",
      a["answers"]["In which city and state do you spend most of your time?"],
      a["answers"]["What's your role when you work (not necessarily job title)?"],
      a["answers"]["What's your \"other\"?"],
      a["answers"]["Your Twitter handle, if you'd like to share it:"],
      a["answers"]["Do you have any dietary restrictions we should try to consider?"],
      a["company"]
    ]
  end
end
