# WeShop_HOME
During the internship in WeShop of semester A20

## Content
The sites of discriptions of WeShop

## Models & language used
* HTML  
* CSS : bootstramp	 
* JS : JQuery Socket.io AJAX  
* PHP : phpsocket.io phpMailer  

## principle functions
*chat with stuff of weshop.  
*contact with weshop with mail.  
*read language of client and translate automaticelly.  
*obtenir un devis.  
*show elements from sql & change them in backend.  

## structure of files
*2 init files :  
>config.php == used to init ip & ports for sql & websocket  
>conn.php == used to connect to db  
*5 main sites :  
>index.php	presentation.php	produits.php	QRShop.php	NosClient.php	contact.php.  
*3 files for translation :  
>cn.php == store chinese translation  
>fr.php == store french translation  
>changeLang.php == function of translation automaticelly  
*1 folder & 2 files for sending mail :  
>contact_send_mail.php == to send mail when client visite contact.php  
>storeDevis.php == included sending mail when client sent a devis  
>PHPMailer includes the model files  
*files for chatting :   
>functions realised in js/home.chat.io.js  
>style defined in css/chat.css  
>reload_chat_history.php == reload history msgs everytime the site refreshed  
