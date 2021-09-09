####  EXAM SETUP PROCEDURE ####
#### Author: Richard Guevara ####

1. git clone https://github.com/kingrgdev/outsourceaccelerator.git
2. Create Database : lr_oaccelerator_dv
3. composer install
4. Enter to gitbash IP Address package: composer require stevebauman/location
Reference : https://www.positronx.io/how-to-get-location-information-with-ip-address-in-laravel/
5. Enter to gitbash : php artisan migrate
6. Enter to gitbash : php artisan server
7. Enter to browser ( Frontend Cut Page ): http://127.0.0.1:8000/
Frontend Screenshot : https://prntscr.com/1rmk93m


#### API REQUEST ####

1. Get User location and save
POST: http://127.0.0.1:8000/api/user_location
Key
- uuid | Required | max 36
- name | Required
- ip_address | Required
Screenshot: https://prntscr.com/1rmkun5

2. I added 2 additional APIs just in case needs to check some records

3. Get All Users Location
GET: http://127.0.0.1:8000/api/get_users_location
Screenshot: https://prntscr.com/1rml4aq

4. Search User Location
POST: http://127.0.0.1:8000/api/search_user_location
Screenshot: https://prntscr.com/1rml6s2