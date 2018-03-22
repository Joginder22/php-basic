#!/bin/bash 
Username=booking_user
Password=book@123
Database=booking_db
Hostname=localhost

status=$(mysql --host=$Hostname --user=$Username --password=$Password --database=$Database -s --execute="SELECT pnr,booking_status FROM booking_queue WHERE pnr = 264758;"|grep -v "pnr" | awk '{print $1,",",$2}')
  echo "$status"
