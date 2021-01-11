const express 		= require('express');
const acNoticeModel = require.main.require('./models/accountControlManeger/acNoticeModel');
const router 		= express.Router();
const bodyParser 	= require('body-parser');
const{ check , validationResult } = require('express-validator');

router.post('/createnoticeAPI', [

		check('towhom', 'Must need to be selected')
			.notEmpty()
		,
		check('subject', 'Must need to be filled')
			.notEmpty()
		,
		check('body', 'Must need to be filled')
			.notEmpty()
	
	], (req, res)=>{
	let data = {
		acid : req.body.acid,
		towhom : req.body.towhom,
		subject : req.body.subject,
		body : req.body.body
	};
	console.log(data);
	const errors = validationResult(req);
	if(errors.isEmpty())
	{
		acNoticeModel.createNotice(data, function(status){
			if(status){
				res.status(200).send({ status : 'Notice Uploaded!!' });
			}else{
				res.status(200).send({ status : 'Fail to send notice!!'});
			}
		});
	}
	else
	{
		console.log(errors.array());
		var em = errors.array();
		var errormassage = ``;

		for(i=0 ; i<em.length ; i++)
		{
			errormassage=errormassage+ em[i].param + " : " + em[i].msg +"<br/>"
		}

		res.status(200).send({ status : errormassage });
	}
})

router.get('/noticesAPI', (req, res)=>{
	acNoticeModel.getAllNotices(function(results){
		res.status(200).send(results);
	});
})

module.exports = router;