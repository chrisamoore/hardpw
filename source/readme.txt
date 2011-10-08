- =================================================================
-- ISSUES 
-- =================================================================

Keyloggers that record time between keystrokes (research).
        Even if these exist, a hardened password is still much more secure,someone will have to train themselves 
        to type a password with the correct timings (assuming these were obtained).

-- =================================================================
-- General Questions
-- =================================================================

How will the password data be transfered?
        JSON or XML (overkill?)
        Single string which is parsed on back end.
        Array of (time,char) tuples.

(Time,Char) tuples need to be compared individually.
        How will this be stored in a DB?
                Probably easiest to store tuples in an array in the DB.
        
-- =================================================================
-- FEATURES
-- =================================================================

Demo Page:
        Give visitors a password and challenge them to log in with it.
        Offer a demo registration process.

Registration Process:
        Will probably need to have users type password several times to obtain hardened password.
                Average the timings.

Automation:
        User should only need to supply the .js source, and a required <div> tag to implement.
        
Accuracy:
        Let user specify level of accuracy?
                Each level decreases the +- tolerance on keystroke timings.

Pattern change recognition:
        Must assume that users will change the way a password is typed over time.
                Timings should persist in such a way that slight changes can be recognized.
        
                                                                                                                                            1,1           Top
