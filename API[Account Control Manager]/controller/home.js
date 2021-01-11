const express 	= require('express');
const userModel = require.main.require('./models/userModel');
const fs = require('fs');
const router 	= express.Router();

router.get('/', (req, res)=>{
	
	if(req.cookies['uname'] != null){
		let data = fs.readFileSync('H:/AIUB/9th semester/ADVANCED PROGRAMMING IN WEB TECHNOLOGY [B]/FinalTerm/API/assets/accountControlManager/json/pending_transaction.json').toString();
		let array= data.split('|');
		let list = [];
		for(i=0;i<array.length-1;i++)
		{
			list.push(JSON.parse(array[i]));
		}
		res.render('home/index',{list: list});

	}else{
		res.redirect('/login');
	}
})

module.exports = router;