- =================================================================
-- ISSUES 
-- =================================================================

Keyloggers that record time between keystrokes (research).
	Even if these exist, a hardened password is still much more secure,someone will have to train themselves 
	to type a password with the correct timings (assuming these were obtained).
      
*******************************************************************
	Key loggers are only client side on the user OS  
	and if that happens the user is fucked anyway
*******************************************************************

-- =================================================================
-- General Questions
-- =================================================================

How will the password data be transfered?
	JSON or XML (overkill?)
*********************************************************************
	I am thinking JSON 
*****************************************************************

Single string which is parsed on back end.
Array of (time,char) tuples.

(Time,Char) tuples need to be compared individually.
	How will this be stored in a DB?
        Probably easiest to store tuples in an array in the DB.
        *******************************************************************
       		I think the DB is a whole nother matter 
		*******************************************************************
        
-- =================================================================
-- FEATURES
-- =================================================================

Demo Page:
	Give visitors a password and challenge them to log in with it.
	Offer a demo registration process.
	*******************************************************************
		Word
	*******************************************************************
Registration Process:
	Will probably need to have users type password several times to obtain hardened password.
		Average the timings.
                
        *******************************************************************
        	exactly
        *******************************************************************

Automation:
    User should only need to supply the .js source, and a required <div> tag to implement.
    *******************************************************************
       	something like $.hardon('#my_div'); to deploy
	*******************************************************************
        
Accuracy:
    Let user specify level of accuracy?
		Each level decreases the +- tolerance on keystroke timings.
        *******************************************************************
			I think the avgs i dea w/ tolerance is good idea perhaps in the options array when 					executing the instantiate function
        *******************************************************************

Pattern change recognition:
    Must assume that users will change the way a password is typed over time.
        Timings should persist in such a way that slight changes can be recognized.
        
        *******************************************************************
			Good idea Run with it
		*******************************************************************                                                                                                             1,1           Top
                
	Core Goals: give away password and maintain security 
		  persistent change recognition
              			  
		  learn users rhythm in three fields
              			  
