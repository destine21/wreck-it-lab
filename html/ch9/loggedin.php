<!DOCTYPE html>
<html>
<style>
@import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,700");
@keyframes onLoad {
  from {
    background: #FFF;
  }
  to {
    background: #22292B;
  }
}
body {
  font-family: "Raleway", sans-serif;
  font-size: 1em;
  font-weight: 400;
  background: #FFF;
  margin   :0;
  animation: onLoad 0.5s ease 0s forwards;
}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.wrapper .container {
  height: 64px;
  position: relative;
}
.wrapper .container .name {
  margin-bottom: 10px;
  position: relative;
  height: 64px;
  overflow: hidden;
}
@keyframes loadName {
  from {
    transform: translateY(64px);
  }
  to {
    transform: translateY(0px);
  }
}
.wrapper .container .name span {
  display: inline-block;
  font-size: 4em;
  color: #FFF;
  transform: translateY(64px);
}
.wrapper .container .name span:nth-child(1) {
  animation: loadName 0.5s ease 1s forwards;
}
.wrapper .container .name span:nth-child(2) {
  animation: loadName 0.5s ease 1.2s forwards;
}
.wrapper .container .name span:nth-child(3) {
  animation: loadName 0.5s ease 1.4s forwards;
}
.wrapper .container .name span:nth-child(4) {
  animation: loadName 0.5s ease 1.6s forwards;
}
.wrapper .container .name span:nth-child(6) {
  animation: loadName 0.5s ease 1.8s forwards;
}
.wrapper .container .name span:nth-child(7) {
  animation: loadName 0.5s ease 2s forwards;
}
.wrapper .container .name span:nth-child(8) {
  animation: loadName 0.5s ease 2.2s forwards;
}
.wrapper .container .name span:nth-child(9) {
  animation: loadName 0.5s ease 2.2s forwards;
}
@keyframes loadLine {
  from {
    width: 0%;
  }
  to {
    width: 100%;
  }
}
.wrapper .container .line {
  height: 4px;
  background: linear-gradient(to right, #ff0066 0%, #ff00cc 100%);
  width: 0%;
  border-radius: 50px;
  animation: loadLine 0.8s ease 2.2s forwards;
}
@keyframes fadeSubIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.wrapper .container .sub {
  margin-top: 15px;
}
.wrapper .container .sub p {
  opacity: 0;
  color: #FFF;
  letter-spacing: 4px;
  animation: fadeSubIn 1s ease 2.4s forwards;
}

</style>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div class="wrapper">
	<div class="container">
		<div class="name">
			<span>W</span>
			<span>e</span>
			<span>l</span>
			<span>l</span>
			<span>&nbsp;</span>
			<span>D</span>
			<span>o</span>
            <span>n</span>
            <span>e</span>
		</div>
		<div class="line"></div>
		<div class="sub">
			<p>Your flag is : flag{SQL_1s_4w3som3}</p>
		</div>
	</div>
</div>
    
</body>
</html>