let mysql = require('mysql');

let con = mysql.createConnection({
    host: 'remotemysql.com',
    user: 'dbnh41dWFL',
    password: 'xbC6DMcFlO'
});

con.connect((err) => {
    if(err) throw err;
    console.log("Connected!");
})