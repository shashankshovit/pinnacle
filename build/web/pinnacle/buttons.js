/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function exxit1()
                {
                    document.getElementById("1").className="";
                    document.getElementById("1").innerHTML="";
                    document.getElementById("2").className="";
                    document.getElementById("2").innerHTML="";
                }
function exxit2()
{
                    document.getElementById("2").className="";
                    document.getElementById("2").innerHTML="";

}

function home()
                {
                    exxit2();
                    document.getElementById("1").className="area";
                    document.getElementById("1").innerHTML="<a onclick=\"parent.location='login/welcome.jsp'\"><br>Click here to take you to your profile page</a>";
                    
                }


function litertica()
{
    exxit2();
    document.getElementById("1").className="area";
    document.getElementById("1").innerHTML="<ul><font color =\"DarkRed\" size = 4 face = \"Algerian\">Rannbhumi</font><font size=4>\n\
                                                <li><a onmouseover=\"litspeak()\">60 Seconds</a></li>\n\
                                                <li><a onmouseover=\"litgd()\">Bheja Fry</a></li>\n\
                                                <li><a onmouseover=\"litbard()\">Wah- Wah</a></li>\n\
                                                <li><a onmouseover=\"lithors()\">Aahwaan</a></li>\n\
                                                <li><a onmouseover=\"litment()\">Adaa- Adaa</a></li>\n\
                                                <li><a onmouseover=\"litidea()\">Matha- Pachchi</a></li>\n\
                                                <li><a onmouseover=\"litcat()\">Cat O'Nine Tales</a></li>\n\
                                                <li><a onmouseover=\"litbite()\">Sampaadan</a></li>\n\
                                                <li><a onmouseover=\"litscrab()\">Jhalak</a></li>\n\
                                             </ul>";
        
}

function tarang()
{
    exxit2();
    document.getElementById("1").className="area";
    document.getElementById("1").innerHTML="<ul><font color =\"DarkRed\" size = 6 face = \"Algerian\">Srijan</font><font size=5>\n\
                                                <li><a onmouseover=\"tarenc()\">Sargam</a></li>\n\
                                                <li><font size = 5><a onmouseover=\"tarunp()\">Unplugged</a></font></li>\n\
                                                <li><a onmouseover=\"tarcon()\">Concert</a></li>\n\
                                                <li><a onmouseover=\"tardanza()\">Dhoom</a></li>\n\
                                                <li><a onmouseover=\"tarnuk()\">Nukkad- Natak</a></li>\n\
                                                <li><a onmouseover=\"tartare()\">Taare Zameen Par</a></li>\n\
                                                <li><a onmouseover=\"tarramp()\">Ramp Burn</a></li>\n\
                                            </ul>";

}

function techno()
{
    exxit2();
    document.getElementById("1").className="area";
    document.getElementById("1").innerHTML="<ul><font color =\"DarkRed\" size = 5 face = \"Algerian\">Technozz</font><font size=5>\n\
                                                <li><a onmouseover=\"tecex()\">Expert Lecture</a></li>\n\
                                                <li><a onmouseover=\"tecul()\">Ultimate Engineering</a></li>\n\
                                                <li><a onmouseover=\"tecsl()\">Slide- Ride</a></li>\n\
                                                <li><a onmouseover=\"tecpl()\">Techno- Placement</a></li>\n\
                                                <li><a onmouseover=\"tecis()\">Iszac</a></li>\n\
                                            </ul>";

}

function hum()
{
    exxit2();
    document.getElementById("1").className="area";
    document.getElementById("1").innerHTML="<ul><font color =\"DarkRed\" size = 5 face = \"Algerian\">Hum Me Hai Hero</font><font size=4>\n\
                                                <li><a onmouseover=\"govinda()\">Govindaa Aallaa Re</a></li>\n\
                                                <li><a onmouseover=\"treasure()\">Treasure Hunt</a></li>\n\
                                                <li><a onmouseover=\"andha()\">Andha Kanoon</a></li>\n\
                                                <li><a onmouseover=\"scooty()\">Slow Scooty Race</a></li>\n\
                                                <li><a onmouseover=\"biking()\">Slow Biking</a></li>\n\
                                                <li><a onmouseover=\"tug()\">Tug of War</a></li>\n\
                                                <li><a onmouseover=\"shakti()\">Shakti Samrat</a></li>\n\
                                                <li><a onmouseover=\"chess()\">Chess</a></li>\n\
                                                <li><a onmouseover=\"soccer()\">Street Soccer</a></li>\n\
                                            </ul>";

}


function contact()
{
    exxit2();
    document.getElementById("1").className="area";
    document.getElementById("1").innerHTML="<ul><font color =\"DarkRed\" size = 4 face = \"Algerian\">Contact Us</font><font size=4>\n\
                                                <li><a onmouseover=\"rann()\">Rann-Bhumi</a></li>\n\
                                                <li><a onmouseover=\"srij()\">Srijan</a></li>\n\
                                                <li><a onmouseover=\"tech()\">Technozzz</a></li>\n\
                                                <li><a onmouseover=\"humm()\">Hum Mein Hain Hero</a></li>\n\
                                                <li><a onmouseover=\"deco()\">Decoration</a></li>\n\
                                                <li><a onmouseover=\"gen()\">General Arrangement</a></li>\n\
                                                <li><a onmouseover=\"ref()\">Refreshment</a></li>\n\
                                                <li><a onmouseover=\"acc()\">Accomodation</a></li>\n\
                                                <li><a onmouseover=\"reg()\">Registration</a></li>\n\
                                                <li><a onmouseover=\"info()\">Information</a></li>\n\
                                                <li><a onmouseover=\"pzd()\">Prize Distribution</a></li>\n\
                                            </ul>";

}











function d()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Monotype Corsiva\"></font>";

}


//              LITERTICA

function litspeak()
{
    number = "one";
    document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">60 seconds <br></font><font size=5 face = \"Monotype Corsiva\">Blurr out whatever you have in just one minute.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"2\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>\n\
";

}
function litgd()
{
    document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Bheja Fry <br></font><font size=5 face = \"Monotype Corsiva\">You can be the one who can lead the group.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"3\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litbard()
{
    document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Wah Wah<br></font><font size=5 face = \"Monotype Corsiva\">When words are set free they enchant the world. Switch on the best in you and pour out your heart with the eng/hindi poetry competition.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"4\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function lithors()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Aahwaan<br></font><font size=5 face = \"Monotype Corsiva\">We don’t have much of saying in how the world around us runs. It’s time to make your voices heard. Speak up and voice your opinion at youth parliament.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"5\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litment()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Adaa- Adaa<br></font><font size=5 face = \"Monotype Corsiva\"> It’s a mocked presentation based on engg. devices,…competition between teams of 2 members….</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"6\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litidea()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Matha- Pachchi <br></font><font size=5 face = \"Monotype Corsiva\"> Grow beyond a yes or no out-look of issues. Assess your understanding with both the sides of the coin. Participate in eng/hindi debate and tackle and do a turncoat.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"7\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litcat()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Cat O nine Tales<br></font><font size=5 face = \"Monotype Corsiva\">Logo ko ghumana achhe se jante ho? Pakde jane pe hardcore kahaniya bana pate ho? Then prove your worth as a day saver by spot story writing…</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"8\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litbite()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Sampaadan<br></font><font size=5 face = \"Monotype Corsiva\"> Pen is mightier than sword. So have a great 2 days, gather your pads n pen down with a proper blend of words, churn it thorough, season it with the right spices and cook up an article.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"9\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litscrab()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Jhalak<br></font><font size=5 face = \"Monotype Corsiva\">:- A 2 min. movie wil be shown 2 participants,and memory wins the game….</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"10\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litcall()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\"><br></font><font size=4 face = \"Monotype Corsiva\">An event aimed at directing the focus of Indian youth at the various problems that India is currently facing & to find possible solutions to those problems.The Event is in two phases: MANTHAN & SAMADHAAN.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litclash()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Monotype Corsiva\"></font><form action=\"events.jsp\"> <input type=\"hidden\" value=\"1\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litinc()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Monotype Corsiva\"></font><form action=\"events.jsp\"> <input type=\"hidden\" value=\"1\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function littech()
{
    document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\"></font><font size=5 face = \"Monotype Corsiva\">Enjoy the traditional dumb-charades with a technical tadka in TECH-CHARADES.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function litword()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\"></font><font size=5 face = \"Monotype Corsiva\"> Not much of a talker? Express yourself, mould your thoughts, opinions and points of view into a string of words with eng/hindi essay competition.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}



//              TARANG

function tarenc()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Sargam<br></font><font size=5 face = \"Monotype Corsiva\">Saaz:-(voice of u.c.e.) Coming Sonus, Latas, KKs, Sunidhis. Beyond all words music in all things.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"11\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function tarunp()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Unplugged <br></font><font size=6 face = \"Monotype Corsiva\"><ul><li><a onmouseover=\"taraco()\">Acoustyx</a></li><li><a onmouseover=\"tardec()\">Decibles</a></li> </ul></font>";




}
function taraco()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Acoustyx (Instrumentica) <br></font><font size=5 face = \"Monotype Corsiva\">  Just pull the plug and find yourself in solace with the melody of rhythm.“SUR, RAAGA, DHUN”\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"12\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}

function tardec()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Decibles (Rockband) <br></font><font size=5 face = \"Monotype Corsiva\">Rock bands are invited from all over the country ... this is your stage ... where the whole arena is monumental. Make it large</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"13\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}

function tarcon()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Concert<br></font><font size=5 face = \"Monotype Corsiva\">(QAWWALI/ SUFI) A style of music that can move the listener to a higher spiritual state.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"14\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function tardanza()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=6 face = \"Algerian\">Dhoom</font><font size=6 face = \"Monotype Corsiva\"><ul><li><a onmouseover=\"crowd()\">Hum Tum</a></li><li><a onmouseover=\"dance()\">Oorja</a></li><li><a onmouseover=\"lazy()\">Pravaah</a></li> </ul></font>\n\
";

}
function crowd()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Hum Tum<br></font><font size=6 face = \"Monotype Corsiva\">(Deut Dance) Couples are invited, chemistry is felt in the air.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"15\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function dance()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Oorja<br></font><font size=5 face = \"Monotype Corsiva\">(Solo Dnace) Young night-Young talent. Blood is chilling out.Feets are sizzling. Hot and happening. Make yourself out of control.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"16\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function lazy()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Pravaah<br></font><font size=6 face = \"Monotype Corsiva\">(Group Dance) Coordination wins the game.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"17\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function trios()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Spectrum<br></font><font size=6 face = \"Monotype Corsiva\"> Showing tradition and culture of india… </font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"18\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
/*function foot()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\"></font><font size=5 face = \"Monotype Corsiva\">Creative imagination, dancing can reveals all the mystery that music conceals.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}*/
function tarnuk()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Nukkad- Natak<br></font><font size=5 face = \"Monotype Corsiva\">(ON STAGE DRAMA) A team of 5 to 20 participants and the act cannot exceed more than 15 mins…</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"19\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function tartare()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Taare Zameen Par <br></font><font size=4 face = \"Monotype Corsiva\">Every child is a gift of God and its our duty to care of it. If we are able then why only sit and watch them to cry for the love which is made for them only. Here is a small effort to feel them special... that they are not alone. They have the right to enjoy happinesss.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"34\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function tarramp()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Monotype Corsiva\">Ramp Burn <br></font><font size=4 face = \"Monotype Corsiva\">Showing tradition and culture of India. Contestents are invited from various engg colleges ... a sizziling, hot , happening ... young evening is burning with the tap of calculated feets...</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"35\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function tarcho()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Monotype Corsiva\"></font>";

}


//          TECHNOZZZ

function tecex()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Expert Lecture</font><font size=4 face = \"Monotype Corsiva\"> UCE, RTU is going to organise couple of great seminar sessions in which the students will have an opportunity to acknowledge great amount of experience of esteemed professors from IIT's & industry background...</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"20\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";


}
function tecul()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Ultimate Engineering</font><font size=4 face = \"Monotype Corsiva\">  Present your imaginations and knowledge through modals. Pinnacle'12 offers you a national level platform to show your talent. None topics are specified for it. You are free to show your talent in any field of your choice. Max 4 participant wil be allowed in each team..</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"21\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";


}
function tecsl()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Slide Ride</font><font size=4 face = \"Monotype Corsiva\">Present your research work in paper presentation in front of the our eminent judges. Pinnacle provides you a national level platform to present your researh works. There is a list of topics among which you have to select the topics. Rules and regulations will be applied.</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"22\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";


}
function tecpl()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Techno Placement</font><font size=4 face = \"Monotype Corsiva\">This is the true test of your aptitude, personality & communication skills. The major objective is to identify one's talent & quality of students who are going to face campus interviews in upcoming time. this will incorporate 3 rounds:<br>1) Aptitude test<br>2) Group Discussion<br>3)Personal Interview</font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"23\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";


}
function tecis()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\"></font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"24\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";


}


//          HUM MEIN HAIN HERO

function govinda()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Govindaa Aallaa Re</font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"25\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";

}
function treasure()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Treasure Hunt </font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"26\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function andha()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Andha Kanoon</font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"27\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function scooty()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Slow Scooty Race</font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"28\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function biking()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Slow Biking </font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"29\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function tug()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Tug of War </font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"30\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function shakti()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Shakti Samrat </font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"31\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function chess()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Chess</font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"32\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}
function soccer()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Street Soccer</font><font size=5 face = \"Monotype Corsiva\"></font>\n\
<form action=\"events.jsp\"> <input type=\"hidden\" value=\"33\" name=\"code\" id=\"code\"> <input type=\"submit\" value=\"register\"> </form>";
}


//          CONTACT US

function rann()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Rann- Bhumi<br></font><font size=5 face = \"Monotype Corsiva\">Bharat Pachori 9785598808 Shobit Stone  Ankit Saxena 9929705675</font>";
}
function srij()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Srijan<br></font><font size=5 face = \"Monotype Corsiva\">Ashish Sharma	9928891305 Mahaveer Choudhary	9166542884 Dheeraj Kr. Rathore	9785946691 Anshul Khatry	9928100353 Nivedika  Gautam	</font>";
}
function tech()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Technozzz<br></font><font size=5 face = \"Monotype Corsiva\">Arihant Jain	9772150150 Anurag Meena 7597078330	Anupama Dwivedi	</font>";
}
function humm()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Hum Mein Hai Hero<br></font><font size=5 face = \"Monotype Corsiva\">Sachin Aggarwal	80588776086 Himanshu Sharma	9785477369 Mausam Faujdar	9983515856</font>";
}

function gen()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">General Arrangement </font><font size=4 face = \"Monotype Corsiva\">Mahadev Depan	9413553961 Hanuman Meena	8696074332 Pankaj Jangir	9785713567 Jayprakash	8824642511 Mahendra Badiyar	 Sher singh	 Arvind Kaswan	vijaypal	Narpat bhakhal	Tarun chandel	Jitram choudhary	</font>";
}
function deco()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Decoration<br></font><font size=5 face = \"Monotype Corsiva\">Anoop  singhal	Meenakshi nagar	Mahadev depan	</font>";
}
function info()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Information<br></font><font size=5 face = \"Monotype Corsiva\">Ashish Sharma	9928891305 Sachin Aggarwal	8058876086 Arihant Jain	9772150150 Anurag Meena	</font>";
}
function ref()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Refreshment<br></font><font size=5 face = \"Monotype Corsiva\">vijaypal	9785096089 jaiprakash	Pankaj jangir	</font>";
}
function acc()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=4 face = \"Algerian\">Accomodation<br></font><font size=5 face = \"Monotype Corsiva\">Dheeraj kr. rathore	9785946691 Anoop Singhal	9636273131 Narpat	</font>";
}
function reg()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Registration<br></font><font size=5 face = \"Monotype Corsiva\">Anurag Meena	7597078330	</font>";
}
function pzd()
{
        document.getElementById("2").className="area2";
    document.getElementById("2").innerHTML="<font size=5 face = \"Algerian\">Prize Distribution<br></font><font size=5 face = \"Monotype Corsiva\">Meenakshi Nagar	9413553937 Sunita Meena		</font>";

}

