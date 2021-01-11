const express 		= require('express');
//const acNoticeModel = require.main.require('./models/accountControlManeger/acNoticeModel');
const router 		= express.Router();
const bodyParser 	= require('body-parser');
const{ check , validationResult } = require('express-validator');
const validatorModel = require.main.require('./models/validatorModel');
const fs = require('fs');

router.post('/createcc/Api', (req, res)=>{
	let data = JSON.parse(req.body.data);
	console.log(data);
	fs.appendFileSync('H:/AIUB/9th semester/ADVANCED PROGRAMMING IN WEB TECHNOLOGY [B]/FinalTerm/API/assets/accountControlManager/json/pending_transaction.json', JSON.stringify(data)+' | \n');
	res.status(200).send({ status : 'Data received!!' });
})

router.get('/vote/:ccid', (req, res)=>{
	let ccid = req.params.ccid;
	//console.log(req.params.ccid);
	let data = fs.readFileSync('H:/AIUB/9th semester/ADVANCED PROGRAMMING IN WEB TECHNOLOGY [B]/FinalTerm/API/assets/accountControlManager/json/pending_transaction.json').toString();
		let array= data.split('|');
		let list = [];
		fs.unlinkSync('H:/AIUB/9th semester/ADVANCED PROGRAMMING IN WEB TECHNOLOGY [B]/FinalTerm/API/assets/accountControlManager/json/pending_transaction.json');
		for(i=0;i<array.length-1;i++)
		{
			console.log(i);
			let item = JSON.parse(array[i]);
			console.log(item);
			if(item.ccid == ccid)
			{
				validatorModel.getbyccid(ccid,req.cookies['uname'], function(results){
					if(results.length != 1){
						validatorModel.createbyccid(ccid,req.cookies['uname'], function(status){
							if(status)
							{
								console.log('hoyna kan')
								item.vote+=1;
								console.log(item.vote);
							}
						});
					}
				});
				
			}
			fs.appendFileSync('H:/AIUB/9th semester/ADVANCED PROGRAMMING IN WEB TECHNOLOGY [B]/FinalTerm/API/assets/accountControlManager/json/pending_transaction.json', JSON.stringify(item)+' | \n');
			list.push(item);
		}
		res.render('home/index',{list: list});
})

module.exports = router;