<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2487.5">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; -webkit-text-stroke: #000000}
    span.s1 {font-kerning: none}
  </style>
</head>
<body>
<p class="p1"><span class="s1">&lt;?php</span></p>
<p class="p1"><span class="s1">if ($_SERVER["REQUEST_METHOD"] == "POST") {</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>$username = $_POST["username"];</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>$password = $_POST["password"];</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>// Save the username and password to a database</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>// For demonstration purposes, we'll just print them</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>echo "Username: " . $username . "&lt;br&gt;";</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">    </span>echo "Password: " . $password;</span></p>
<p class="p1"><span class="s1">}</span></p>
<p class="p1"><span class="s1">?&gt;</span></p>
</body>
</html>
