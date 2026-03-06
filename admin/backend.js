/* sider section start */
   
/* sider section end */
/* main section start */
   
        /* profile section start */
          
        /* profile section end */
        /* databox section start */
            
        /* databox section end */
        /* users table section start */
            function adduser(){
                document.querySelector('.adduserbox').classList.add('d-block');
                document.querySelector('.adduserbox').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-block');
                document.querySelector('.closebox').classList.remove('d-none');
                document.querySelector('.adduser').classList.add('d-none');
                document.querySelector('.adduser').classList.remove('d-block');
            }
            function closeuserbox(){
                document.querySelector('.adduserbox').classList.add('d-none');
                document.querySelector('.adduserbox').classList.remove('d-block');
                document.querySelector('.adduser').classList.add('d-block');
                document.querySelector('.adduser').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-none');
                document.querySelector('.closebox').classList.remove('d-block');
            }
        /* users table section end */
        /* product table section start */
            function addproduct(){
                document.querySelector('.addproductbox').classList.add('d-block');
                document.querySelector('.addproductbox').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-block');
                document.querySelector('.closebox').classList.remove('d-none');
                document.querySelector('.addproduct').classList.add('d-none');
                document.querySelector('.addproduct').classList.remove('d-block');
            }
            function closeproductbox(){
                document.querySelector('.addproductbox').classList.add('d-none');
                document.querySelector('.addproductbox').classList.remove('d-block');
                document.querySelector('.addproduct').classList.add('d-block');
                document.querySelector('.addproduct').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-none');
                document.querySelector('.closebox').classList.remove('d-block');
            }
        /* product table section end */
        /* category table section start */
            function addcategory(){
                document.querySelector('.addcategorybox').classList.add('d-block');
                document.querySelector('.addcategorybox').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-block');
                document.querySelector('.closebox').classList.remove('d-none');
                document.querySelector('.addcategory').classList.add('d-none');
                document.querySelector('.addcategory').classList.remove('d-block');
            }
            function closecategorybox(){
                document.querySelector('.addcategorybox').classList.add('d-none');
                document.querySelector('.addcategorybox').classList.remove('d-block');
                document.querySelector('.addcategory').classList.add('d-block');
                document.querySelector('.addcategory').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-none');
                document.querySelector('.closebox').classList.remove('d-block');
            }
        /* category table section end */
        /* order table section start */

        /* order table section end */
        /* best sellingtable section start */
            function addbestselling(){
                document.querySelector('.addbestsellingbox').classList.add('d-block');
                document.querySelector('.addbestsellingbox').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-block');
                document.querySelector('.closebox').classList.remove('d-none');
                document.querySelector('.addbestselling').classList.add('d-none');
                document.querySelector('.addbestselling').classList.remove('d-block');
            }
            function closebestsellingbox(){
                document.querySelector('.addbestsellingbox').classList.add('d-none');
                document.querySelector('.addbestsellingbox').classList.remove('d-block');
                document.querySelector('.addbestselling').classList.add('d-block');
                document.querySelector('.addbestselling').classList.remove('d-none');
                document.querySelector('.closebox').classList.add('d-none');
                document.querySelector('.closebox').classList.remove('d-block');
            }
        /* best selling table section end */
        /* message table section start */

        /* message table section end */
/* main section end */

// logout section start
    function logout(){
        window.location.href = "logout.php"; 
    }
// logout section end