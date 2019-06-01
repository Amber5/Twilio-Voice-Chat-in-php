<!DOCTYPE html>
<html>
<head>
<title>Twilio Client Quickstart</title>
<link rel="stylesheet" href="site.css">
</head>
<body>
  
  <div id="controls">
 


    <div id="call-controls">
      <p class="instructions">Make a Call:</p>
      <input id="phone-number" type="text" placeholder="Enter a phone # or client name" />
      <button id="button-call">Call</button>
      <button id="button-hangup">Hangup</button>
      <div id="volume-indicators">
        <label>Mic Volume</label>
        <div id="input-volume"></div><br/><br/>
        <label>Speaker Volume</label>
        <div id="output-volume"></div>
      </div>
    </div>
    <div id="log"></div>
  </div>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://media.twiliocdn.com/sdk/js/client/v1.7/twilio.min.js"></script>
  <script type="text/javascript" src="quickstart.js"></script>
</body>
</html>
