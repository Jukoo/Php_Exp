#!/usr/local/bin/make
#-----------------------
#   this MakeFile auto generate the missing  module 
#   if it ll be deleted by accident 
#    ### WARNING ### 

vendor : composer.json
	composer install 

composer.lock : composer.json 
	composer update

devSer  : # run the Dev Server 
	sudo ~/./Xrun start 

shutdown : # trun of the server 
	sudo ~/./Xrun stop 
refresh  : # reload the server 
	sudo ~/./Xrun restart 


