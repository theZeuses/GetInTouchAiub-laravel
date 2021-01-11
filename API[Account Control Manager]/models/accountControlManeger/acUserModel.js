const db = require('../db-secure');

module.exports ={
	getAllUser: function(callback){
		var sql = "Select * FROM `user`";
		db.getResults(sql, null , function(results){
			console.log(results);
			callback(results);
		});
	},
	
	CreateUser: function(data , callback){
		var sql = "insert into user VALUES (?,?,?,?,?)";
		db.execute(sql, ['',data.guid,data.guid,'General User','Active'], function(status){
			console.log(status);
			callback(status);
		});
	},
	deleteUserFromUser: function(data , callback){
		var sql = "DELETE FROM `user` WHERE userid=?";
		db.execute(sql, [data.guid], function(status){
			console.log(status);
			callback(status);
		});
	},

	deleteCCFromUser: function(data , callback){
		var sql = "DELETE FROM `user` WHERE userid=?";
		db.execute(sql, [data.ccid], function(status){
			console.log(status);
			callback(status);
		});
	},

	tbUserFromUser: function(data , callback){
		var sql = "UPDATE `user` SET `accountstatus`='Temporarily Banned' WHERE userid=?";
		db.execute(sql, [data.guid], function(status){
			console.log(status);
			callback(status);
		});
	},

	insertUser: function(data , callback){
		var sql= "INSERT INTO `user`(`id`, `userid`, `password`, `usertype`, `accountstatus`) VALUES (?,?,?,?,?)";
		db.execute(sql, ['' , data.ccid , data.ccid , 'Content Control Manager' , 'Active'], function(status){
			console.log(status);
			callback(status);
		});
	},

	bannedUserFromUser: function(data , callback){
		var sql = "UPDATE `user` SET `accountstatus`='Blocked' WHERE userid=?";
		db.execute(sql, [data.guid], function(status){
			console.log(status);
			callback(status);
		});
	},

	deactivateACFromUser: function(data , callback){
		var sql = "UPDATE `user` SET `accountstatus`='Deactivated' WHERE userid=?";
		db.execute(sql, [data.acid], function(status){
			console.log(status);
			callback(status);
		});
	}
}