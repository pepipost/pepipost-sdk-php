# Steps to install Pepipost PHP Code Library on Linux

Developers always :heart: the freedom of working on open source and why not? - If it's more secure and free. So is our APIs.

```
Optional Note: This library will be sending HTTP calls to Pepipost server and hence if you're running any firewalls
then please whitelist the API base URL api.pepipost.com with port 443/80
```

### Installation Steps for Building SDk

The Code has few Dependencies which we have listed in our ```composer.json``` file which comes with our SDK.
Below Steps will Guide you Step by Step, So that your installation is completed Smoothly.

  1. Check PHP version (should be >= 5.4.0)
     
     ```bash
     php -v
     ```
     
     ![phpinstall](https://i.imgur.com/yc2Eftg.png)
      
      or you can install [PHP](http://php.net/manual/en/install.unix.debian.php) if it is not installed
    
  2. Check composer version 
  
     ```bash
     composer --version
     ```
     
     ![comp](https://i.imgur.com/NqjNRMz.png)
     
     or download [composer](https://getcomposer.org/download/) if composer is not installed
     
     
  3. Open Command prompt/ terminal. 

  4. make Test Directory or you can directly copy the git clone command below
  
     ``` mkdir test ```
 
  5. Download SDK 
  
     Check whether Git is installed or not 
 
     *Note :: This is not mandatory you can also download zip of SDK if you don't want to clone we will go by git clone method both methods are described below.*
 
     **Git method**
  
     Clone [Pepipost PHP Repo](https://github.com/pepipost/pepipost-sdk-php.git)
      
     ```git clone https://github.com/pepipost/pepipost-sdk-php.git test```
      
     ![clone](https://i.imgur.com/aqtjgdh.png)
      
     **Zip method**
   
     Download [Zip here](https://github.com/pepipost/pepipost-sdk-php/archive/master.zip)
       
     Unzip in your new directory named **test** (mentioned in point no 2).

   6. Resolving Dependencies 
    
      Change your Directory 
      
      ```cd test``` (unzipped or cloned directory).
    
      use below to install all dependencies
      
      ```composer install```
   
      ![composerinstall](https://i.imgur.com/3UZqRgY.png)

   7. Running Sample Code.
    
      ```vim testSDK.php``` (open in any editor).
    
      Copy and paste Sample Code from [simpleUsage](https://github.com/pepipost/pepipost-sdk-php/blob/master/simpleUsage.md) file
      
      **OR**
      
      ``` mv SimpleUsage.md  testSDK.php```
      
    
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
   
   ```json
   
   ```
    
    
