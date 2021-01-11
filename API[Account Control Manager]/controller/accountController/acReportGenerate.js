const express 		= require('express');
const router 		= express.Router();
const PDFDocument	= require('pdfkit');
const fs 			= require('fs');
const acUserModel = require.main.require('./models/accountControlManeger/acUserModel');


router.get('/generateuserinfoAPI', (req, res)=>{
	
	
		// Create a document
		const doc = new PDFDocument();
		 
		var date = new Date();	//date object
		doc.pipe(fs.createWriteStream("assets/accountControlManager/reports/userreports/"+date.getTime()+"[userInfo].pdf"));	// Pipe its output somewhere, like to a file or HTTP response
		doc.fontSize(40);	//set the font size
		doc.text("User Reposts-", 50, 50);
		acUserModel.getAllUser(function(results){
			if(results.length > -1)
			{
				total=0;
				admin=0;
				adminactive=0;
				admindecative=0;

				ac=0;
				acactive=0;
				acdeactive=0;

				cc=0;
				ccactive=0;
				ccdeactive=0;

				gu=0;
				guactive=0;
				gutemporarilyblocked=0;
				gublocked=0;

				for(i=0 ; i<results.length ; i++)
				{
					if(results[i].usertype == "Admin")
					{
						admin=admin+1;
						total=total+1;
						if(results[i].accountstatus== "Active") 
						{
							adminactive=adminactive+1;
						}
						else
						{
							admindecative=admindecative+1;
						}
						
					}
					else if(results[i].usertype == "Account Control Manager")
					{
						ac=ac+1;
						total=total+1;
						if(results[i].accountstatus== "Active") 
						{
							acactive=acactive+1;
						}
						else
						{
							acdeactive=acdeactive+1;
						}
					}
					else if(results[i].usertype == "Content Control Manager")
					{
						cc=cc+1;
						total=total+1;
						if(results[i].accountstatus== "Active") 
						{
							ccactive=ccactive+1;
						}
						else
						{
							ccdeactive=ccdeactive+1;
						}
					}
					else
					{
						gu=gu+1;
						total=total+1;
						if(results[i].accountstatus== "Active") 
						{
							guactive=guactive+1;
						}
						else if(results[i].accountstatus== "Blocked") 
						{
							gublocked=gublocked+1;
						}
						else
						{
							gutemporarilyblocked=gutemporarilyblocked+1;
						}
					}
				}		
				doc.fontSize(20);
				doc.text("• Total number of admin = "+admin , 50, 100);
				doc.text("• Number of active account = "+adminactive , 100, 130);
				doc.text("• Number of deactive account = "+admindecative , 100, 160);
				doc.text("• Total number of account control manager = " + ac , 50, 190);
				doc.text("• Total number of account control manager = " + acactive , 100, 210);
				doc.text("• Number of deactive account = " + acdeactive , 100, 240);
				doc.text("• Total number of content control manager = " + cc , 50, 270);
				doc.text("• Number of active account = " + ccactive , 100, 300);
				doc.text("• Number of deactive account = " + ccdeactive , 100, 330);
				doc.text("• Total number of general user = " + gu , 50, 360);
				doc.text("• Number of active account = " + guactive , 100, 390);
				doc.text("• Number of temporarily blocked account = " + gutemporarilyblocked , 100, 420);
				doc.text("• Number of deactive account = " + gublocked , 100, 450);
				doc.fontSize(30);
				doc.text("Total user = " + total , 50 , 500);
				doc.end();
				
				res.status(200).send({ status : 'Report generated!!'});
			}
			else
			{
				res.status(200).send({ status : 'Failed!!' });
			}
		});
		 
		// Add an image, constrain it to a given size, and center it vertically and horizontally
		/*doc.image('path/to/image.png', {
		  fit: [250, 300],
		  align: 'center',
		  valign: 'center'
		});*/
		 
		// Add another page
		/*doc
		  .addPage()
		  .fontSize(25)
		  .text('Here is some vector graphics...', 100, 100);*/
		 
		// Draw a triangle
		/*doc
		  .save()
		  .moveTo(100, 150)
		  .lineTo(100, 250)
		  .lineTo(200, 250)
		  .fill('#FF3300');*/
		 
		// Apply some transforms and render an SVG path with the 'even-odd' fill rule
		/*doc
		  .scale(0.6)
		  .translate(470, -380)
		  .path('M 250,75 L 323,301 131,161 369,161 177,301 z')
		  .fill('red', 'even-odd')
		  .restore();*/
		 
		// Add some text with annotations
		/*doc
		  .addPage()
		  .fillColor('blue')
		  .text('Here is a link!', 100, 100)
		  .underline(100, 100, 160, 27, { color: '#0000FF' })
		  .link(100, 100, 160, 27, 'http://google.com/');*/
		 
		//doc.end();	// Finalize PDF file
})




//GET /acReportGenerate/GenerateUserInfo
module.exports = router;