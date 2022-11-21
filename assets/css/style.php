<?php

/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

font {
color: black;
}

@import
url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;1,100;1,400&display=swap");

* {
box-sizing: border-box;
}

html.open, body.open {
height: 100%;
overflow: hidden;
}

html {
padding: 40px;
font-size: 62.5%;
}

body {
padding: 20px;
background-color: #1c1a24;
line-height: 1.6;
-webkit-font-smoothing: antialiased;
color: #fff;
font-size: 1.6rem;
font-family: 'Lato', sans-serif;
}

p {
text-align: center;
margin: 20px 0 60px;
font-family: 'Source Sans Pro', sans-serif;
font-weight: bold;
letter-spacing: 2px;
}

main {
background-color: #2C3845;
}

h1 {
text-align: center;
font-weight: 300;
font-family: 'Sono', sans-serif;
}

table {
display: block;
}

tr, td, tbody, tfoot {
display: block;
font-family: 'Karla', sans-serif;
font-weight:bold;
}

thead {
display: none;
}

tr {
padding-bottom: 10px;
}

td {
padding: 10px 10px 0;
text-align: center;
}
td:before {
content: attr(data-title);
color: #7a91aa;
text-transform: uppercase;
font-size: 1.4rem;
padding-right: 10px;
display: block;
}

table {
width: 100%;
}

th {
text-align: center;
font-weight: 700;
}

thead th {
background-color: #202932;
color: #fff;
border: 1px solid #202932;
}

tfoot th {
display: block;
padding: 10px;
text-align: center;
color: #b8c4d2;
}


/* CSS */
.button-56 {
align-items: center;
background-color: #6f888f;
border: 2px solid #111;
border-radius: 8px;
box-sizing: border-box;
color: #e2e2e2;
cursor: pointer;
display: flex;
font-size: 16px;
height: 48px;
justify-content: center;
line-height: 24px;
max-width: 100%;
padding: 0 25px;
position: absolute;
top: 15px;
left: 14px;
text-align: center;
text-decoration: none;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
font-family: 'Sono', sans-serif;
font-weight: bold;
}

.button-56:after {
background-color: #cacaca;
border-radius: 8px;
content: "";
display: block;
height: 48px;
left: 0;
width: 100%;
position: absolute;
top: -2px;
transform: translate(8px, 8px);
transition: transform .2s ease-out;
z-index: -1;
}

.button-56:hover:after {
transform: translate(0, 0);
}

.button-56:active {
background-color: #2d555e;
outline: 0;
}

.button-56:hover {
outline: 0;
}


@media (min-width: 460px) {
td {
text-align: left;
}
td:before {
display: inline-block;
text-align: right;
width: 140px;
}

.select {
padding-left: 160px;
}
}
@media (min-width: 720px) {
table {
display: table;
}

tr {
display: table-row;
}

td, th {
display: table-cell;
}

tbody {
display: table-row-group;
}

thead {
display: table-header-group;
}

tfoot {
display: table-footer-group;
}

td {
border: 1px solid #28333f;
}

.aksi {
text-align:center;

}

td:before {
display: none;
}

td, th {
padding: 10px;
}

tr:nth-child(2n+2) td {
background-color: #242e39;
}

tfoot th {
display: table-cell;
}

.select {
padding: 10px;
}
}

a {
color: black;
text-decoration: none;
margin: 0px 6px;
padding: 8px 7px;
color: white;
border-radius: 3px;
background-color: blue;
font-family: monospace;
}

a:nth-child(1) {
padding: 8px
}

a:nth-child(2) {
background-color: red;

}