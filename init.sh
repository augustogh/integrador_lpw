#/bin/bash
docker-compose up -d 
sleep 50
mysql -h 127.0.0.1 -u root --password=dbpass < basealumnos.sql
