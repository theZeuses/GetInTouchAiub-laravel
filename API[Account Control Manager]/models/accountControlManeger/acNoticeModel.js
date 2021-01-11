const db = require('../db-secure');

module.exports ={
	
	getAllNotices: function(callback){
		var sql = "select * from adminnotice";
		db.getResults(sql, null, function(results){
			callback(results);
		});
	},
	createNotice: function(data, callback){
		var sql = "insert into acnotice VALUES (?, ? , ? , ? , ?)";
		db.execute(sql, ['' , data.acid , data.subject , data.body , data.towhom] , function(status){
			callback(status);
		});
	},
}