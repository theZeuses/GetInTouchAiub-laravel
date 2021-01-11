//declaration
const express 					= require('express');
const bodyParser 				= require('body-parser');
const exSession 				= require('express-session');
const cookieParser 				= require('cookie-parser');
const login						= require('./controller/login');
const home						= require('./controller/home');
const logout					= require('./controller/logout');	
const acNotice 					= require('./controller/accountController/acNotice');
const acvalidationrequest 		= require('./controller/accountController/acValidationRequest');
const acReportGenerate 			= require('./controller/accountController/acReportGenerate');
const{check,validationResult }	= require('express-validator');
const app 						= express();

//config
app.set('view engine', 'ejs');

//middleware
app.use('/assets',express.static('assets'));
app.use(bodyParser.urlencoded({extended: true}));
app.use(exSession({secret: 'my secret value', saveUninitialized: true, resave: false, cookie: {
    httpOnly: true,
    maxAge: 5*60*60*1000
  }
}));
app.use(cookieParser());

app.use('/login', login);
app.use('/home', home);
app.use('/logout', logout);
app.use('/acnotice', acNotice);
app.use('/acreportgenerate',acReportGenerate);
app.use('/acvalidationrequest',acvalidationrequest);

//route
app.get('/', (req, res)=>{
	console.log('GetInTouchAIUB API');
	res.send('Hello from GetInTouchAIUB API server');
});

//server startup
app.listen(3000, (error)=>{
	console.log('express server started at 3000...');
});