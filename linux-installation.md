# Steps to install Pepipost PHP Code Library on Linux

Developers always :heart: the freedom of working on open source and why not? - If it's more secure and free. So is our APIs.

```
Optional Note: This library will be sending HTTP calls to Pepipost server and hence if you're running any firewalls
then please whitelist the API base URL api.pepipost.com with port 443/80
```

### Installation Steps for Building SDk

The Code has few Dependencies which we have listed in our ```composer.json``` file which comes with our SDK.
Below Steps will Guide you Step by Step, So that your installation is completed Smoothly.

  1. Open Command prompt/ terminal. 

  2. Change Directory to any new directory (Make directory test-- recommended).

  3. Check PHP version (should be >= 5.4.0)
     
     ```php -v```
     
     ![phpinstall](http://app1.falconide.com/integration_imgs/linux/l1.png)
      
      or you can install [PHP](http://php.net/manual/en/install.unix.debian.php) if it is not installed
    
  4. Check composer version 
  
     ```composer --version```
     
     ![comp](http://app1.falconide.com/integration_imgs/linux/l1.1.png)
     
     or download [composer](https://getcomposer.org/download/) if composer is not installed
 
  5. Download SDK 
  
     Check whether Git is installed or not 
 
     *Note :: This is not mandatory you can also download zip of SDK if you don't want to clone we will go by git clone method both methods are described below.*
 
     **Git method**
  
     Clone [Pepipost PHP Repo](https://github.com/pepipost/pepipost-sdk-php.git)
      
     Using **git clone https://github.com/pepipost/pepipost-sdk-php.git**
      
     ![clone](http://app1.falconide.com/integration_imgs/linux/l3.png)
      
     **Zip method**
   
     Download [Zip here](https://github.com/pepipost/pepipost-sdk-php/archive/master.zip)
       
     Unzip in your new directory named **test** (mentioned in point no 2).

   6. Resolving Dependencies 
    
      Change your Directory to **test** (unzipped or cloned directory).
    
      use ```composer install``` to install all dependencies
   
      ![composerinstall](http://app1.falconide.com/integration_imgs/linux/l4.png)

   7. Running Sample Code.
    
      Make File testSDK.php (open in any editor).
    
      Copy and paste Sample Code from [simpleUsage](https://github.com/pepipost/pepipost-php/blob/feature_x/pepipost-sdk-php/simpleUsage.md) file
    
   8. Grab your apiKey and SendingDomain from panel

      apikey will be available from login to pepipost -> settings -> integration

      Sending Domain will be available from login to pepiost -> settings -> Sending Domains

      **note :: only Active Domains are allowed**
  
      Make neccessary Changes in Script (apikey and Sending Domain -- mandatory changes).
     Change your $apiKey = 'api-XX-key-XX-here' to $apiKey = 'api-key-from-panel';

   Similarly Change your Sending Domain from $body->from->fromEmail = 'admin@myfirsttest.com'; to $body->from->fromEmail = 'admin@your-active-domain-from-panel';
    
9. Send Your First email using SDK
    
   ```php testSDK.php``` 
   
   This will give you result as follows
   
   ```{"data":{},"message":"Success","error_info":null}```
    
    
