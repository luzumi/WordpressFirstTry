/*
 * Plugin Name:
 * Plugin URI: http://192.168.84.252/ || http://10.110.34.200/
 * Description:
 * Version: 1.0.0
 * Author: Luzumi
 */


const sum = document.createElement('Sum');

const raid = document.getElementById('Raid').onchange = function () {
    return this.value;
}
const anzahl = document.getElementById('Anzahl').onchange = function () {
    return this.value;
}
const groesse = document.getElementById('Groesse').onchange = function () {
    return this.value;
}

const groessen = [256, 512, 1024, 2048, 4096, (2 * 4096)];

sum.text(raid + anzahl + groesse);

console.log(raid + anzahl + groesse);

