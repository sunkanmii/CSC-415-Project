
let con = mysql.createConnection({
    host: 'remotemysql.com',
    user: 'dbnh41dWFL',
    password: 'xbC6DMcFlO'
});

con.connect((err) => {
    if(err) throw err;
    console.log("Connected!");
})

let connect = con;

export default connect = con;