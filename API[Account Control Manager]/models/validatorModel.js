const db = require('./db');

module.exports ={

	getbyccid: function(ccid , validator , callback){
		var sql = "select * from validatorlog where ccid=? and validator=?";
		db.getResults(sql, [ccid , validator], function(results){
			console.log(results);
			callback(results);
		});
	},

	createbyccid: function(ccid , validator , callback){
		var sql = "INSERT INTO `validatorlog`(`ccid`, `validator`) VALUES (?,?)";
		db.execute(sql, [ccid , validator], function(status){
			console.log(status);
			callback(status);
		});
	}
}