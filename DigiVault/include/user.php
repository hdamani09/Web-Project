<input type="checkbox" id="menuToggle" style="display:none">
<label for="menuToggle" class="menu-icon">&#9776;</label>

<div id="logout-header">
  <div class="logout-image">
    <?php include 'profilepic.inc.php' ?>
  </div>
  <div class="logout-button">
    <form action='include/signout.inc.php' method='post'>
    <button type='submit' name='submit-signout' >Logout</button>
    </form>
  </div>
</div>

<div class="user-wrapper">
  <!--SideNav -->
  <div class="user-sidenav animated fadeIn">
    <ul class="user-navbar">
      <li class="nav-class" id="n1"><img src="images/nav-profile.png"><span class="list-info">Change your account settings.</span>  <div class="nav-item">Profile</div>  </li>
      <li class="nav-class" id="n2"><img src="images/nav-file.png"><span class="list-info">Upload and Manage files.</span>  <div class="nav-item">Files</div>   </li>
      <li class="nav-class" id="n3"><img src="images/nav-contact.png"><span class="list-info">Reach out to Us.</span> <div class="nav-item">Contact</div>   </li>
      <li class="nav-class" id="n4"><img src="images/nav-forum.png"><span class="list-info">Interact with others.</span>  <div class="nav-item">Forum</div>   </li>
    </ul>
  </div>

  <!--Main Panel-->
  <div class="user-mainpanel">
   <!-- Account settings -->
   <div class="user-mainbody">
      <div class="user-cover">
        <?php include 'coverpic.inc.php' ?>
        <div class="user-editimage">
          <form action="include/uploadcover.inc.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="cover-upload" style="display:none" onchange="this.form.submit();">
            <label for="cover-upload" class="fa fa-camera fa-2x" aria-hidden="true"></label>
          </form>
          <form action="include/deletecover.inc.php" method="post">
            <button type='submit' name='submit-deletepic' class="picupload">&#10006;</button>
          </form>
        </div>
      </div>
      <div class="user-profile">
        <?php include 'profilepic.inc.php' ?>
        <div class="user-editimage">
          <form action="include/uploadprofile.inc.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="profile-upload" style="display:none" onchange="this.form.submit();">
            <label for="profile-upload" class="fa fa-camera fa-2x" aria-hidden="true"></label>
          </form>
          <form action="include/deleteprofile.inc.php" method="post">
            <button type='submit' name='submit-deletepic' class="picupload">&#10006;</button>
          </form>
        </div>
      </div>
      <div class="user-body">
      </div>
    </div>
   <!-- Contact us -->
   <div class="user-contact" style="display:none">
      <div class="contact-form">
        <p class="form-header" >Contact Us</p>
        <form action="include/contact.inc.php" method="POST">
          <p>Subject</p>
          <input type="text" name="subject" placeholder="Write subject" required="">
          <p>Message</p>
          <textarea name="message" placeholder="Write your message here" required=""> </textarea>
          <button type="submit" name="submit-contact" value="submit">Submit</button>
        </form>
      </div>
   </div>
   <!-- Upload files -->
   <div class="user-files" style="display:none;">
     <div class="user-upload-form">
       <div class="upload-grid">
         <form class="upload-grid-form" action="" method="post" enctype="multipart/form-data">
           <input type="file" name="file" id="file-upload" style="display:none" onchange="this.form.submit();">
           <label for="file-upload" class="fa fa-upload fa-4x" aria-hidden="true"></label>
         </form>
         <div class="upload-grid-ext">
           The supported document formats include:<br><br>
           .pdf | .jpeg/.jpg | .png | .gif | .tiff | .bmp |
           .txt | .rtf | .doc | .docx | .ppt | .pptx |
           .xls | .xlsx | .pub<br><br>
           The uploaded documents are sorted into the three given categories below.
         </div>
       </div>
     </div>
     <div class="user-upload-category">
       <div class="category-grid">
         <div class="category-header">
           PDF Docs
         </div>
         <img src="images/files-pdf.png">
         <p>Access your PDF (Portable Document Format) files.</p>
       </div>
       <div class="category-grid">
         <div class="category-header">
           Images
         </div>
         <img src="images/files-images.png">
         <p>Access your supported image/picture type files.</p>
       </div>
       <div class="category-grid">
         <div class="category-header">
           Other Files
         </div>
         <img src="images/files-files.png">
         <p>Access your other extension files.</p>
       </div>
     </div>
   </div>
  </div>
</div>
