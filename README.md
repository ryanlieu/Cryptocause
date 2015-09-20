# Cryptocause

Cryptocause is a website that allows you to use your web browser to mine Bitcoin for charitable causes. The application is JavaScript-based (GL shader components are forked from [hamiyoca](https://github.com/derjanb/hamiyoca) and JSON-RPC PHP library by Sergio Vaccaro) and the pool used is `getblocktemplate`-based by [Eligius](http://eligius.st). 

A Node backend serves up live stats piped by WebSockets and automates the transfer of funds to known BTC addresses of charities using Coinbase API's. A PHP backend handles the hashing work of clients, using RPC to send the work over HTTP (which should really be Stratum in the future).

## Hosting Cryptocuase

To run Cryptocause, spin up both the PHP (`php -S localhost`) and the Node (`node app.js`) and navigate to index.php. 
