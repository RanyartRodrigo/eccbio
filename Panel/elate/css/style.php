<?php
header('content-type:text/css');
$efecto="transform: perspective( 1000px ) rotateY(20deg);";
include "../../base.php";
$obj=new Base("localhost","root","conabio");
$result =$obj->consulta("SELECT color FROM colores");
$numfilas = $result->num_rows;
for ($x=0;$x<$numfilas;$x++) {
    $fila = $result->fetch_object();
    if($x==0)
        $primero=$fila->color;
    if($x==1)
        $segundo=$fila->color;
    if($x==2)
        $cajas=$fila->color;
    if($x==3)
        $texto=$fila->color;
}

if(isset($_GET['color'])){
    $primero="#".$_GET['color'];
}
$fondo=$segundo;

echo <<<FINCSS
#myDiv, #myDiv2{
float:left;
width:100%;
}
.sel {
    width: 25%;
    height: 50px;
    margin: 0px;
    float: left;
    margin-top: -47px;
    position:relative;
    z-index:10000;
}
.sel select {
    width: 100px;
color: $segundo;
    background: $texto;
}
@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
/* =======================================================
*
* 	Template Style 
*	Edit this section
*
* ======================================================= */
body {
  font-family: "Source Sans Pro", Arial, sans-serif;
  font-weight: 300;
  font-size: 20px;
  line-height: 1.5;
  color: $texto;
  color: $texto;
  background: $segundo;
  height: 100%;
  position: relative;
}

a {
  color: $primero;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
a:hover, a:active, a:focus {
  color: $primero;
  outline: none;
}

p {
  margin-bottom: 1.5em;
}

h1, h2, h3, h4, h5, h6 {
  color: $texto;
  font-family: "Source Sans Pro", Arial, sans-serif;
  font-weight: 400;
  margin: 0 0 30px 0;
}

::-webkit-selection {
  color: #818892;
  background: #f9f6f0;
}

::-moz-selection {
  color: #818892;
  background: #f9f6f0;
}

::selection {
  color: #818892;
  background: #f9f6f0;
}

.edge--bottom {
  position: relative;
  z-index: 1;
}
.edge--bottom:after {
  background: inherit;
  content: '';
  display: block;
  height: 50%;
  left: 0;
  position: absolute;
  right: 0;
  z-index: -1;
  -webkit-backface-visibility: hidden;
}
.edge--bottom:after {
  bottom: 0;
  transform: skewY(-1.5deg);
  transform-origin: 100%;
}

.edge--bottom--reverse {
  position: relative;
  z-index: 1;
}
.edge--bottom--reverse:after {
  background: inherit;
  content: '';
  display: block;
  height: 50%;
  left: 0;
  position: absolute;
  right: 0;
  z-index: -1;
  -webkit-backface-visibility: hidden;
}
.edge--bottom--reverse:after {
  bottom: 0;
  transform: skewY(1.5deg);
  transform-origin: 0 100%;
}

.edge--top {
  position: relative;
  z-index: 1;
}
.edge--top:before {
  background: inherit;
  content: '';
  display: block;
  height: 50%;
  left: 0;
  position: absolute;
  right: 0;
  z-index: -1;
  -webkit-backface-visibility: hidden;
}
.edge--top:before {
  top: 0;
  transform: skewY(1.5deg);
  transform-origin: 100% 0;
}

.edge--top--reverse {
  position: relative;
  z-index: 1;
}
.edge--top--reverse:before {
  background: inherit;
  content: '';
  display: block;
  height: 50%;
  left: 0;
  position: absolute;
  right: 0;
  z-index: -1;
  -webkit-backface-visibility: hidden;
}
.edge--top--reverse:before {
  top: 0;
  transform: skewY(-1.5deg);
  transform-origin: 0 0;
}

.edge--both {
  position: relative;
  z-index: 1;
}
.edge--both:before, .edge--both:after {
  background: inherit;
  content: '';
  display: block;
  height: 50%;
  left: 0;
  position: absolute;
  right: 0;
  z-index: -1;
  -webkit-backface-visibility: hidden;
}
.edge--both:before {
  top: 0;
  transform: skewY(1.5deg);
  transform-origin: 100% 0;
}
.edge--both:after {
  bottom: 0;
  transform: skewY(-1.5deg);
  transform-origin: 100%;
}

.edge--both--reverse {
  position: relative;
  z-index: 1;
}
.edge--both--reverse:before, .edge--both--reverse:after {
  background: inherit;
  content: '';
  display: block;
  height: 50%;
  left: 0;
  position: absolute;
  right: 0;
  z-index: -1;
  -webkit-backface-visibility: hidden;
}
.edge--both--reverse:before {
  top: 0;
  transform: skewY(-1.5deg);
  transform-origin: 0 0;
}
.edge--both--reverse:after {
  bottom: 0;
  transform: skewY(1.5deg);
  transform-origin: 0 0;
}

#fh5co-header {
  position: absolute;
  z-index: 99;
  width: 100%;
  opacity: 1;
  top: 0;
  margin-top: 40px;
}
@media screen and (max-width: 768px) {
  #fh5co-header {
    margin-top: 0;
    background: $segundo;
    -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
  }
  #fh5co-header .navbar-brand {
    color: $primero !important;
  }
  #fh5co-header #navbar li a {
    color: rgba(0, 0, 0, 0.5) !important;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
  }
  #fh5co-header #navbar li a:hover {
    color: $primero !important;
  }
  #fh5co-header #navbar li a span:before {
    background: transparent !important;
  }
  #fh5co-header #navbar li.active a {
    background: transparent;
    background: none;
    color: $primero !important;
  }
  #fh5co-header #navbar li.active a span:before {
    visibility: visible;
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
  }
}
#fh5co-header .navbar {
  padding-bottom: 0;
  margin-bottom: 0;
}
#fh5co-header #navbar li a {
  font-family: "Source Sans Pro", Arial, sans-serif;
  color: rgba(255, 255, 255, 0.5);
  position: relative;
  font-size: 19px;
  font-weight: 300;
}
#fh5co-header #navbar li a span {
  position: relative;
  display: block;
  padding-bottom: 2px;
}
#fh5co-header #navbar li a span:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: rgba(255, 255, 255, 0.5);
  visibility: hidden;
  -webkit-transform: scaleX(0);
  -moz-transform: scaleX(0);
  -ms-transform: scaleX(0);
  -o-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
#fh5co-header #navbar li a:hover {
  color: $segundo;
}
#fh5co-header #navbar li a:hover span:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  -moz-transform: scaleX(1);
  -ms-transform: scaleX(1);
  -o-transform: scaleX(1);
  transform: scaleX(1);
}
#fh5co-header #navbar li.active a {
  background: transparent;
  background: none;
  color: $segundo;
}
#fh5co-header #navbar li.active a span:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}
#fh5co-header .navbar-brand {
  float: left;
  display: block;
  font-size: 30px;
  font-weight: 700;
  padding-left: 0;
  color: $segundo;
}
#fh5co-header.navbar-fixed-top {
  position: fixed !important;
  background: $segundo;
  -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.1);
  margin-top: 0px;
  top: 0;
}
#fh5co-header.navbar-fixed-top .navbar-brand {
  color: $primero;
}
#fh5co-header.navbar-fixed-top #navbar li a {
  color: rgba(0, 0, 0, 0.5);
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
#fh5co-header.navbar-fixed-top #navbar li a:hover {
  color: $primero;
}
#fh5co-header.navbar-fixed-top #navbar li.active a {
  background: transparent;
  background: none;
  color: $primero;
}
#fh5co-header.navbar-fixed-top #navbar li.active a span:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
  background-color: $primero;
}
#fh5co-header .navbar-default {
  border: transparent;
  background: transparent;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  -ms-border-radius: 0px;
  border-radius: 0px;
}
@media screen and (max-width: 768px) {
  #fh5co-header .navbar-default {
    margin-top: 0px;
    padding-right: 0px;
    padding-left: 0px;
  }
}
#fh5co-header .navbar-default .brand-slogan {
  margin: 28px 0 0 15px;
  float: left;
  letter-spacing: 2px;
  color: #adadad;
}
#fh5co-header .navbar-default .brand-slogan em {
  color: $primero;
  font-style: normal;
}
#fh5co-header a {
  -webkit-transition: 0s;
  -o-transition: 0s;
  transition: 0s;
}

#fh5co-home {
  background-color: transparent;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
  width: 100%;
  background-color: $primero;
  color: $segundo;
  overflow: hidden;
}
#fh5co-home .gradient {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
  opacity: .9;
  -webkit-backface-visibility: hidden;
  background-color: $primero;
  /* IE9, iOS 3.2+ */
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0idnNnZyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPjxzdG9wIHN0b3AtY29sb3I9IiMzZjk1ZWEiIHN0b3Atb3BhY2l0eT0iMSIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzUyZDNhYSIgc3RvcC1vcGFjaXR5PSIxIiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjdnNnZykiIC8+PC9zdmc+);
  background-image: -webkit-gradient(linear, 0% 0%, 100% 100%, color-stop(0, $texto), color-stop(1, $primero));
  /* Android 2.3 */
  background-image: -webkit-repeating-linear-gradient(top left, $texto 0%, $primero 100%);
  /* IE10+ */
  background-image: repeating-linear-gradient(to bottom right, $texto 0%, $primero 100%);
  background-image: -ms-repeating-linear-gradient(top left, $texto 0%, $primero 100%);
}
#fh5co-home, #fh5co-home .text-wrap {
  height: 900px;
}
#fh5co-home .text-wrap {
  display: table;
  width: 100%;
  position: relative;
  z-index: 4;
}
#fh5co-home .text-inner {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}
#fh5co-home .text-inner a {
  color: white;
  border-bottom: 1px dashed rgba(255, 255, 255, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-home .text-inner a:hover, #fh5co-home .text-inner a:active, #fh5co-home .text-inner a:focus {
  text-decoration: none;
  color: white;
  border-bottom: 1px dashed white;
}
#fh5co-home .text-inner h1 {
  font-size: 50px;
  color: white;
  margin: 0 0 20px 0;
}
#fh5co-home .text-inner h2 {
  font-size: 28px;
  line-height: 38px;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.8);
  margin: 0;
}

.slant {
  position: absolute;
  transform: rotate(-1.7deg);
  -ms-transform: rotate(-1.7deg);
  -webkit-transform: rotate(-1.7deg);
  -o-transform: rotate(-1.7deg);
  -moz-transform: rotate(-1.7deg);
  background-color: $segundo;
  content: "";
  z-index: 3;
  display: inline-block;
  height: 70px;
  bottom: 0;
  margin-bottom: -35px;
  padding: 0;
  width: 101%;
}

#fh5co-intro {
  position: relative;
  bottom: 0;
  margin-top: -150px;
  z-index: 10;
  padding-bottom: 7em;
}
@media screen and (max-width: 768px) {
  #fh5co-intro {
    padding-bottom: 3em;
  }
}
#fh5co-intro > div {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
}
@media screen and (min-width: 780px){
.enlaces{
width:25% !important;
}
.enlaces img{
height:140px;
}
}
#fh5co-intro .fh5co-block {
  width: 33.33%;
  float: left;
  text-align: center;
  font-size: 16px;
  min-height: 300px;
  vertical-align: middle;
  padding: 40px;
  background: $segundo;
  -webkit-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
  -moz-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
  -ms-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
  -o-box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
  box-shadow: 7px 14px 42px 3px rgba(163, 174, 184, 0.4);
  z-index: 7;
  flex-grow: 1;
  background-size: cover;
  position: relative;
  backgroun-repeat: no-repeat;
}
@media screen and (max-width: 768px) {
  #fh5co-intro .fh5co-block {
    width: 100%;
  }
}
#fh5co-intro .fh5co-block > .overlay-darker {
  z-index: 8;
  opacity: .5;
  background: #474747;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
#fh5co-intro .fh5co-block > .overlay {
  background: $segundo;
  opacity: 1;
  z-index: 9;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-intro .fh5co-block > .fh5co-text {
  position: relative;
  z-index: 10;
}
#fh5co-intro .fh5co-block > .fh5co-text .fh5co-intro-icon {
  font-size: 50px;
  color: $primero;
  margin-bottom: 30px;
  display: block;
}
#fh5co-intro .fh5co-block h2 {
  font-size: 24px;
  font-weight: 400;
}
#fh5co-intro .fh5co-block:hover > .overlay, #fh5co-intro .fh5co-block:focus > .overlay {
  opacity: 0;
  z-index: 9;
}
#fh5co-intro .fh5co-block:hover > .fh5co-text, #fh5co-intro .fh5co-block:focus > .fh5co-text {
  color: $segundo;
}
#fh5co-intro .fh5co-block:hover > .fh5co-text .fh5co-intro-icon, #fh5co-intro .fh5co-block:focus > .fh5co-text .fh5co-intro-icon {
  color: $segundo;
}
#fh5co-intro .fh5co-block:hover h2, #fh5co-intro .fh5co-block:focus h2 {
  color: $segundo;
}
#fh5co-intro .fh5co-block:hover .btn, #fh5co-intro .fh5co-block:focus .btn {
  border: 2px solid $segundo !important;
  background: transparent;
}
#fh5co-intro .fh5co-block:hover .btn:hover, #fh5co-intro .fh5co-block:focus .btn:hover {
  background: $primero !important;
  border: 2px solid $primero !important;
}

.watch-video {
  text-align: center;
  width: 100%;
  display: block;
  float: left;
}
.watch-video span {
  display: block;
  margin-bottom: 20px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: bold;
}
.watch-video .btn-video {
  display: block;
  font-size: 60px;
  height: 120px;
  width: 120px;
  margin: 0 auto;
  border: 2px solid $primero;
  line-height: 0px;
  display: table;
  text-align: center;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.watch-video .btn-video:hover, .watch-video .btn-video:focus, .watch-video .btn-video:active {
  text-decoration: none;
}
.watch-video .btn-video i {
  position: relative;
  display: table-cell;
  vertical-align: middle;
  margin: 0;
  padding: 0;
  right: -9px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.watch-video .btn-video:hover i, .watch-video .btn-video:focus i {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

#fh5co-services, #fh5co-testimonials, #fh5co-counters, #fh5co-work, #fh5co-contact, #fh5co-about {
  padding: 4em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-services, #fh5co-testimonials, #fh5co-counters, #fh5co-work, #fh5co-contact, #fh5co-about {
    padding: 2em 0;
  }
}

#fh5co-services, #fh5co-work, #fh5co-counters {
  padding: 7em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-services, #fh5co-work, #fh5co-counters {
    padding: 4em 0;
  }
}

#fh5co-services {
  background-color: $primero;
  /* IE9, iOS 3.2+ */
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0idnNnZyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPjxzdG9wIHN0b3AtY29sb3I9IiMzZjk1ZWEiIHN0b3Atb3BhY2l0eT0iMSIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzUyZDNhYSIgc3RvcC1vcGFjaXR5PSIxIiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjdnNnZykiIC8+PC9zdmc+);
  background-image: -webkit-gradient(linear, 0% 0%, 100% 100%, color-stop(0, $texto), color-stop(1, $primero));
  /* Android 2.3 */
  background-image: -webkit-repeating-linear-gradient(top left, $texto 0%, $primero 100%);
  /* IE10+ */
  background-image: repeating-linear-gradient(to bottom right, $texto 0%, $primero 100%);
  background-image: -ms-repeating-linear-gradient(top left, $texto 0%, $primero 100%);
  overflow: hidden;
  position: relative;
  color: rgba(255, 255, 255, 0.7);
}
#fh5co-services:before, #fh5co-services:after {
  position: absolute;
  transform: rotate(-1.7deg);
  -ms-transform: rotate(-1.7deg);
  -webkit-transform: rotate(-1.7deg);
  -o-transform: rotate(-1.7deg);
  -moz-transform: rotate(-1.7deg);
  background-color: $segundo;
  content: "";
  z-index: 3;
  display: inline-block;
  height: 70px;
  padding: 0;
  width: 101%;
}
#fh5co-services:before {
  top: 0;
  margin-top: -35px;
}
#fh5co-services:after {
  bottom: 0;
  margin-bottom: -35px;
}
#fh5co-services .fh5co-service {
  padding-right: 30px;
}
#fh5co-services h3 {
  font-size: 24px;
  color: $segundo;
}
#fh5co-services .icon {
  font-size: 70px;
  margin-bottom: 30px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
#fh5co-services .icon:before {
  color: $segundo;
}
#fh5co-services .section-heading h2 {
  color: $segundo;
}
#fh5co-services .section-heading h2.left-border:after {
  background: rgba(255, 255, 255, 0.3);
}

#fh5co-counters {
  background: $primero;
  overflow: hidden;
  background-color: transparent;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
  width: 100%;
  padding: 9em 0 10em 0;
}
@media screen and (max-width: 768px) {
  #fh5co-counters {
    padding: 4em 0;
  }
}
#fh5co-counters .fh5co-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 0;
  background: rgba(0, 0, 0, 0.7);
}
#fh5co-counters:before, #fh5co-counters:after {
  position: absolute;
  transform: rotate(-1.7deg);
  -ms-transform: rotate(-1.7deg);
  -webkit-transform: rotate(-1.7deg);
  -o-transform: rotate(-1.7deg);
  -moz-transform: rotate(-1.7deg);
  background-color: $segundo;
  content: "";
  z-index: 3;
  display: inline-block;
  height: 70px;
  padding: 0;
  width: 101%;
}
#fh5co-counters:before {
  top: 0;
  margin-top: -35px;
}
#fh5co-counters:after {
  bottom: 0;
  margin-bottom: -35px;
}
#fh5co-counters .section-heading {
  position: relative;
  z-index: 3;
  margin-bottom: 0;
}
#fh5co-counters .section-heading h2 {
  color: $segundo;
}
#fh5co-counters .section-heading h2:after {
  background: rgba(255, 255, 255, 0.3) !important;
}
#fh5co-counters .section-heading .subtext h3 {
  color: rgba(255, 255, 255, 0.7) !important;
}
#fh5co-counters .fh5co-counter {
  position: relative;
  z-index: 3;
  text-align: center;
}
@media screen and (max-width: 992px) {
  #fh5co-counters .fh5co-counter {
    margin-bottom: 50px;
    float: left;
    width: 100%;
  }
}
#fh5co-counters .fh5co-counter .fh5co-counter-icon,
#fh5co-counters .fh5co-counter .fh5co-counter-number,
#fh5co-counters .fh5co-counter .fh5co-counter-label {
  display: block;
}
#fh5co-counters .fh5co-counter .fh5co-counter-icon {
  font-size: 40px;
  color: $primero;
}
#fh5co-counters .fh5co-counter .fh5co-counter-number {
  font-size: 70px;
  color: $segundo;
  font-weight: 300;
}
#fh5co-counters .fh5co-counter .fh5co-counter-label {
  color: rgba(255, 255, 255, 0.5);
  font-size: 18px;
  font-weight: 400;
}

#fh5co-testimonials .box-testimony {
  margin-bottom: 2em;
  float: left;
}
#fh5co-testimonials .box-testimony a {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-testimonials .box-testimony a:hover, #fh5co-testimonials .box-testimony a:focus, #fh5co-testimonials .box-testimony a:active {
  color: white;
  text-decoration: none;
}
#fh5co-testimonials .box-testimony blockquote {
  padding-left: 0;
  border-left: none;
  padding: 30px;
  background: $segundo;
  background: $primero;
  font-size: 20px;
  font-weight: 300;
  position: relative;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  -ms-border-radius: 7px;
  border-radius: 7px;
}
#fh5co-testimonials .box-testimony blockquote:after {
  content: "";
  position: absolute;
  top: 100%;
  left: 40px;
  border-top: 10px solid black;
  border-top-color: $segundo;
  border-top-color: $primero;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
}
#fh5co-testimonials .box-testimony blockquote p {
  font-style: italic;
  color: $segundo;
}
#fh5co-testimonials .box-testimony .author {
  line-height: 20px;
  color: black;
  font-size: 16px;
  margin-left: 20px;
  font-weight: 400;
}
#fh5co-testimonials .box-testimony .author a {
  color: $primero;
}
#fh5co-testimonials .box-testimony .author a:hover {
  text-decoration: underline;
}
#fh5co-testimonials .box-testimony .author > figure {
  float: left;
  margin-right: 10px;
}
#fh5co-testimonials .box-testimony .author > figure img {
  width: 60px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
#fh5co-testimonials .box-testimony .author p {
  float: left;
  margin-top: 10px;
}
#fh5co-testimonials .box-testimony .author .subtext {
  display: block;
  color: rgba(0, 0, 0, 0.5);
  font-size: 16px;
  font-weight: 400 !important;
}

#fh5co-work {
  overflow: hidden;
  position: relative;
  color: rgba(255, 255, 255, 0.8);
  background-color: $primero;
  /* IE9, iOS 3.2+ */
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0idnNnZyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPjxzdG9wIHN0b3AtY29sb3I9IiMzZjk1ZWEiIHN0b3Atb3BhY2l0eT0iMSIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzUyZDNhYSIgc3RvcC1vcGFjaXR5PSIxIiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjdnNnZykiIC8+PC9zdmc+);
  background-image: -webkit-gradient(linear, 0% 0%, 100% 100%, color-stop(0, $texto), color-stop(1, $primero));
  /* Android 2.3 */
  background-image: -webkit-repeating-linear-gradient(top left, $texto 0%, $primero 100%);
  /* IE10+ */
  background-image: repeating-linear-gradient(to bottom right, $texto 0%, $primero 100%);
  background-image: -ms-repeating-linear-gradient(top left, $texto 0%, $primero 100%);
}
#fh5co-work a {
  color: rgba(255, 255, 255, 0.5);
  text-decoration: underline;
}
#fh5co-work a:hover {
  color: white;
}
#fh5co-work:before, #fh5co-work:after {
  position: absolute;
  transform: rotate(-1.7deg);
  -ms-transform: rotate(-1.7deg);
  -webkit-transform: rotate(-1.7deg);
  -o-transform: rotate(-1.7deg);
  -moz-transform: rotate(-1.7deg);
  background-color: $segundo;
  content: "";
  z-index: 3;
  display: inline-block;
  height: 70px;
  padding: 0;
  width: 101%;
}
#fh5co-work:before {
  top: 0;
  margin-top: -35px;
}
#fh5co-work:after {
  bottom: 0;
  margin-bottom: -35px;
}
#fh5co-work .section-heading h2 {
  color: $segundo;
}
#fh5co-work .section-heading h2:after {
  background: rgba(255, 255, 255, 0.3);
}
#fh5co-work .section-heading h3 {
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-work .fh5co-project-item {
  display: block;
  width: 100%;
  position: relative;
  top: 0;
  background: $segundo;
  overflow: hidden;
  z-index: 9;
  margin-bottom: 30px;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  -ms-border-radius: 7px;
  border-radius: 7px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
#fh5co-work .fh5co-project-item img {
  z-index: 8;
  opacity: 1;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
#fh5co-work .fh5co-project-item .fh5co-text {
  padding: 10px 20px;
}
#fh5co-work .fh5co-project-item .fh5co-text h2, #fh5co-work .fh5co-project-item .fh5co-text span {
  text-decoration: none !important;
}
#fh5co-work .fh5co-project-item .fh5co-text h2 {
  font-size: 18px;
  font-weight: bold;
  margin: 0;
}
#fh5co-work .fh5co-project-item .fh5co-text span {
  color: #b3b3b3;
  font-size: 16px;
  font-weight: 400;
}
#fh5co-work .fh5co-project-item:hover, #fh5co-work .fh5co-project-item:focus {
  -webkit-box-shadow: 7px 14px 42px 3px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: 7px 14px 42px 3px rgba(0, 0, 0, 0.4);
  -ms-box-shadow: 7px 14px 42px 3px rgba(0, 0, 0, 0.4);
  -o-box-shadow: 7px 14px 42px 3px rgba(0, 0, 0, 0.4);
  box-shadow: 7px 14px 42px 3px rgba(0, 0, 0, 0.4);
  text-decoration: none;
  top: -15px;
}
#fh5co-work .fh5co-project-item:hover img, #fh5co-work .fh5co-project-item:focus img {
  opacity: .7;
}
#fh5co-work .fh5co-project-item:hover h2, #fh5co-work .fh5co-project-item:hover span, #fh5co-work .fh5co-project-item:focus h2, #fh5co-work .fh5co-project-item:focus span {
  text-decoration: none !important;
}

.fh5co-person {
  border: 2px solid #f2f2f2;
  padding: 80px 30px 30px 30px;
  float: left;
  width: 100%;
  position: relative;
}
@media screen and (max-width: 992px) {
  .fh5co-person {
    margin-bottom: 3.5em;
  }
}
.fh5co-person figure {
  position: absolute;
  margin-top: -60px;
  top: 0;
  left: 50%;
  margin-left: -60px;
  display: block;
  margin-bottom: 50px;
}
.fh5co-person figure img {
  width: 120px;
  border: 2px solid #f2f2f2;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.fh5co-person h3 {
  margin-bottom: 0px;
}
.fh5co-person .fh5co-position {
  color: #b3b3b3;
  display: block;
  margin-bottom: 20px;
}

.form-control {
  box-shadow: none;
  background: transparent;
  border: 2px solid rgba(0, 0, 0, 0.1);
  height: 54px;
  font-size: 18px;
  font-weight: 400;
}
.form-control:active, .form-control:focus {
  outline: none;
  box-shadow: none;
  border-color: $primero;
}

.btn {
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.btn:hover, .btn:active, .btn:focus {
  outline: none;
}

#fh5co-contact {
  padding-bottom: 0;
}
#fh5co-contact .fh5co-contact-info {
  padding: 0;
  margin: 0 0 1.5em 0;
}
#fh5co-contact .fh5co-contact-info li {
  position: relative;
  padding: 0;
  margin: 0 0 1.5em 0;
  padding-left: 50px;
  list-style: none;
}
#fh5co-contact .fh5co-contact-info li i {
  position: absolute;
  top: .2em;
  left: 0;
}

.section-heading {
  float: left;
  width: 100%;
  padding-bottom: 50px;
  margin-bottom: 50px;
  clear: both;
}
.section-heading h2 {
  margin: 0 0 30px 0;
  font-size: 50px;
  font-weight: 300;
  color: #444;
  text-transform: uppercase;
  position: relative;
  display: block;
  padding-bottom: 20px;
  line-height: 1.5;
}
.section-heading h2.left-border:after {
  content: "";
  position: absolute;
  display: block;
  width: 80px;
  height: 2px;
  background: $primero;
  left: 0%;
  margin-left: 0px;
  bottom: 0;
}
.section-heading h2:after {
  content: "";
  position: absolute;
  display: block;
  width: 80px;
  height: 2px;
  background: $primero;
  left: 50%;
  margin-left: -40px;
  bottom: 0;
}
@media screen and (max-width: 768px) {
  .section-heading h2 {
    font-size: 30px;
  }
}
.section-heading h3 {
  font-weight: 300;
  line-height: 1.5;
  color: #929292;
}
@media screen and (max-width: 768px) {
  .section-heading h3 {
    font-size: 24px !important;
    line-height: 34px;
  }
}

.btn {
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.fh5co-nav-toggle {
  width: 25px;
  height: 25px;
  cursor: pointer;
  text-decoration: none;
}
.fh5co-nav-toggle.active i::before, .fh5co-nav-toggle.active i::after {
  background: $primero;
}
.fh5co-nav-toggle:hover, .fh5co-nav-toggle:focus, .fh5co-nav-toggle:active {
  outline: none;
  border-bottom: none !important;
}
.fh5co-nav-toggle i {
  position: relative;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  width: 25px;
  height: 3px;
  color: $primero;
  font: bold 14px/.4 Helvetica;
  text-transform: uppercase;
  text-indent: -55px;
  background: $primero;
  transition: all .2s ease-out;
}
.fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
  content: '';
  width: 25px;
  height: 3px;
  background: $primero;
  position: absolute;
  left: 0;
  -webkit-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}

.fh5co-nav-toggle i::before {
  top: -7px;
}

.fh5co-nav-toggle i::after {
  bottom: -7px;
}

.fh5co-nav-toggle:hover i::before {
  top: -10px;
}

.fh5co-nav-toggle:hover i::after {
  bottom: -10px;
}

.fh5co-nav-toggle.active i {
  background: transparent;
}

.fh5co-nav-toggle.active i::before {
  top: 0;
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  transform: rotateZ(45deg);
}

.fh5co-nav-toggle.active i::after {
  bottom: 0;
  -webkit-transform: rotateZ(-45deg);
  -moz-transform: rotateZ(-45deg);
  -ms-transform: rotateZ(-45deg);
  -o-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
}

.fh5co-nav-toggle {
  position: absolute;
  top: 2px;
  right: 0px;
  z-index: 21;
  padding: 6px 0 0 0;
  display: block;
  margin: 0 auto;
  display: none;
  height: 44px;
  width: 25px;
  border-bottom: none !important;
}
@media screen and (max-width: 768px) {
  .fh5co-nav-toggle {
    display: block;
  }
}

#footer {
  padding: 50px 0;
  color: $texto;
  position: relative;
}
#footer .gotop {
  position: absolute;
  top: -20px;
  left: 50%;
  margin-left: -40px;
  background: $segundo;
  z-index: 8;
  width: 80px;
  height: 80px;
  font-size: 30px;
  padding-top: 5px;
  text-align: center;
  vertical-align: middle;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  -webkit-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}
#footer .gotop:hover, #footer .gotop:focus {
  top: -25px;
  text-decoration: none !important;
}
#footer .copyright {
  font-size: 16px;
  margin-bottom: 0px;
  padding-bottom: 0;
}

.btn {
  text-transform: uppercase;
  letter-spacing: 2px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.btn.btn-primary {
  background: $primero;
  color: $segundo;
  border: none !important;
  border: 2px solid transparent !important;
}
.btn.btn-primary:hover, .btn.btn-primary:active, .btn.btn-primary:focus {
  box-shadow: none;
  background: $primero;
}
.btn:hover, .btn:active, .btn:focus {
  background: #393e46 !important;
  color: $segundo;
  outline: none !important;
}
.btn.btn-default:hover, .btn.btn-default:focus, .btn.btn-default:active {
  border-color: transparent;
}

.social {
  padding: 0;
  margin: 0;
  display: inline-block;
  position: relative;
  width: 100%;
}
.social li {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-block;
}
.social li a {
  font-size: 16px;
  display: table;
  width: 40px;
  height: 40px;
  margin: 0 4px;
}
.social li a i {
  display: table-cell;
  vertical-align: middle;
}
.social li a:hover, .social li a:active, .social li a:focus {
  text-decoration: none;
  border-bottom: none;
}
.social li a.social-box {
  background: $primero;
  color: $segundo;
}
.social li a.social-circle {
  background: $primero;
  color: $segundo;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}
.social li a:hover {
  background: #393e46 !important;
}
.social.social-box a {
  background: $primero;
  color: $segundo;
}
.social.social-circle a {
  background: $primero;
  color: $segundo;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#map {
  width: 100%;
  height: 500px;
  position: relative;
}
@media screen and (max-width: 768px) {
  #map {
    height: 200px;
  }
}

.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  /* ideally, transition speed should match zoom duration */
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
  opacity: 1;
}

.mfp-with-zoom.mfp-ready.mfp-bg {
  opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0;
}

.js .to-animate,
.js .to-animate-2,
.js .single-animate {
  opacity: 1;
}

@media screen and (max-width: 480px) {
  .col-xxs-12 {
    float: none;
    width: 100%;
  }
}

.row-bottom-padded-lg {
  padding-bottom: 7em;
width: 100%;
}
@media screen and (max-width: 768px) {
  .row-bottom-padded-lg {
    padding-bottom: 2em;
  }
}

.row-bottom-padded-md {
  padding-bottom: 4em;
}
@media screen and (max-width: 768px) {
  .row-bottom-padded-md {
    padding-bottom: 2em;
  }
}

.row-bottom-padded-sm {
  padding-bottom: 2em;
}
@media screen and (max-width: 768px) {
  .row-bottom-padded-sm {
    padding-bottom: 2em;
  }
}

.fh5co-animated {
  -webkit-animation-duration: .3s;
  animation-duration: .3s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

/*# sourceMappingURL=style.css.map */

FINCSS;
?>


