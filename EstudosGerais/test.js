var r = [2, 5, 6, 18, 20, 10, 23, 12, 19, 10];

var s = [1, 5, 7, 13, 18, 21, 10, 25, 32, 17, 3];

var x = [0];

var i;

for(i=0; i<=9; i++){

x[i] = r[i];

}

for(i=0; i<=10; i++){

x[i+10] = s[i];

}

document.write(x[13]+"<br>");

document.write(i);