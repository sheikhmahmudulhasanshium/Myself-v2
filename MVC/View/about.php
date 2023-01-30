
<html>
    <head>
        <h1 align="center">About</h1>
        <?php include 'slide_show_container/style.html'; ?>
    </head>
    <body bgcolor="#0E6EE8">
            <center>
            <!--img src="Images/shium 2.jpg" alt="X" height="160",width="160"-->
            <?php include 'slide_show_container/container.html'; ?> 
            </center>
           
        <table>
            <tr>
                <td ><h2> Personal information</h2>
                
<!--for more details go to https://www.dofactory.com/html/table/hidden#:~:text=The%20hidden%20attribute%20hides%20the,its%20position%20on%20the%20page.-->
                    <table class="tb" id="about_me" >
                        <tr>
                            <td align="right"><b>Full Name:   </b></td>
                            <td>Sheikh Mahmudul Hasan Shium</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Father's Name:   </b></td>
                            <td>Sheikh Akram Uddin</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Mother's Name:   </b></td>
                            <td>Sahida Sultana Hira</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Gender:   </b></td>
                            <td>Male</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Blood Group:   </b></td>
                            <td>A+</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Date of Birth:   </b></td>
                            <td>24/12/2000</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Phone Number:   </b></td>
                            <td>+8801729771453</td>
                            
                        </tr>
                        
                        <tr>
                            <td align="right"><b>Religion:   </b></td>
                            <td>Islam</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Marital Status:   </b></td>
                            <td>Unmarried</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Home District:   </b></td>
                            <td>Khulna</td>
                            
                        </tr>
                        <tr>
                            <td align="right"><b>Nationality:   </b></td>
                            <td>Bangladeshi</td>
                            
                        </tr>
                </table>
                <button onclick="primary_info(this);">-</button> 

                </td>
            </tr>
            <tr>
                <td><h2> 
                        Addresss
                </h2>
                     <table class="about" id="address" >
                        <tr>
                            <td align="right"><b> Present Address:  </b></Address></td>
                            <td>
                                <b>House No:   </b> 254,
                                <b>Road No: </b>9,
                                <b>Block:   </b>C,
                                Bashundhara R/A,
                                <b>Division:    </b> Dhaka.
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><b> Permanent Address: </b></td>
                            <td>
                                <b>Holding No:   </b> 82,
                                <b>Police Station: </b>Aronghata,
                                <b>Post Office:  </b>BIT-9203 (KUET),
                                <b>Village: </b>Teligati,
                                <b>District:    </b>Khulna,
                                <b>Division:    </b> Khulna.
                            </td>
                        </tr>
                    </table>
                <button onclick="address_info(this);">-</button> 
                
                </td>
                    </td>
            </tr>
            
            <tr>
                <td><h2> Academic Qualification </h2>
                    <table border="2" class="about" id="academic">
                        
                        <tr>
                            <td> 
                                <b>
                                Passing Year
                                </b>
                            </td>
                            <td><b> Exam</b></td>
                            <td> <b>
                                
                                Institute Name
                                </b>
                            </td>
                            <td><b> Group/Department</b></td>
                            <td> <b>
                                Board
                                </b>
                            </td>
                            
                            <td> <b>
                                Result (Division/GPA/CGPA)
                                </b>
                            </td>
                        
                        </tr>
                        <tr>
                            <td>2011</td>
                            <td>P.S.C</td>
                            <td>Ashuganj Tap Bidyut Kendra High School</td>
                            <td>Science</td>
                            <td>Comilla Board</td>
                            <td>1st Division</td>
                        </tr>

                        <tr>
                            <td>2014</td>
                            <td>J.S.C</td>
                            <td>Ashuganj Tap Bidyut Kendra High School</td>
                            <td>Science</td>
                            <td>Comilla Board</td>
                            <td>G.P.A-5.00 out of 5.00</td>
                        </tr>
                        <tr>
                            <td>2016</td>
                            <td>S.S.C</td>
                            <td>Ashuganj Tap Bidyut Kendra High School</td>
                            <td>Science</td>
                            <td>Comilla Board</td>
                            <td>G.P.A-4.94 out of 5.00</td>
                        </tr>
                        
                            <tr>
                                <td>2018</td>
                                <td>H.S.C</td>
                                <td>Abdul Kadir Mollah City College</td>
                                <td>Science</td>
                                <td>Dhaka Board</td>
                                <td>G.P.A-4.17 out of 5.00</td>
                            </tr>
    
                        <tr>
                            <td>2023</td>
                            <td>B.S.C</td>
                            <td>American International University-Bangladesh</td>
                            <td>Computer Science And Engineering</td>
                            <td>&nbsp;</td>
                            <td>C.G.P.A-3.86 out of 4.00</td>
                        </tr>

                    </table>
                    <button onclick="academic_info(this);">-</button> 
                </td>
            </tr>

            <tr>
                <td>
                    <h2>
                        Personal Interest
                    </h2>
                    <table id="interest" class="about">
                        <tr>
                            <td>
                                <b>
                                    Blockchain Technologies, Robotics, IOT, Machine Learning, Artificial Intelligence, Software Quality Assurance & Testing,  etc.
                                </b>
                            </td>
                        </tr>
                    </table>
                    <button onclick="interest_info(this);">-</button> 
                </td>
            </tr>
        </table>
        
        <?php include 'show_hide/show_hide_table.html'; ?>
        <?php include 'footer_all.php';?>  
              