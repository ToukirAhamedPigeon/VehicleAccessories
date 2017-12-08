<?php
$config = array(
 'registration' => array(
  array(
    'field' => 'title',
    'label' => 'Title',
    'rules' => 'required'
  ),
  array(
    'field' => 'country',
    'label' => 'Country',
    'rules' => 'required'
  ),
  array(
    'field' => 'district',
    'label' => 'District',
    'rules' => 'required'
  ),
  array(
    'field' => 'division',
    'label' => 'Division',
    'rules' => 'required'
  ),
  array(
    'field' => 'thana',
    'label' => 'Thana',
    'rules' => 'required'
  ),
  array(
    'field' => 'city',
    'label' => 'City',
    'rules' => 'required'
  ),
  array(
    'field' => 'firstname',
    'label' => 'First Name',
    'rules' => 'required|alpha|trim'
  ),
  array(
   'field' => 'lastname',
   'label' => 'Last Name',
   'rules' => 'required|alpha|trim'
 ),
  array(
    'field' => 'username',
    'label' => 'User Name',
    'rules' => 'required|alpha_numeric|trim|is_unique[user.username]'
  ),
  array(
    'field' => 'nid',
    'label' => 'NID',
    'rules' => 'integer|trim'
  ),
  array(
    'field' => 'phone',
    'label' => 'Phone',
    'rules' => 'required|numeric|min_length[11]|max_length[14]|trim'
  ),
  array(
    'field' => 'street',
    'label' => 'Street',
    'rules' => 'required'
  ),
  array(
    'field' => 'password',
    'label' => 'Password',
    'rules' => 'required|min_length[6]|max_length[12]|alpha_numeric'
  ),
  array(
    'field' => 'confirmpassword',
    'label' => 'Password Confirmation',
    'rules' => 'required|matches[password]'
  ),
  array(
    'field' => 'email',
    'label' => 'Email',
    'rules' => 'required|valid_email'
  )
),
 'login'=> array(
  array(
    'field' => 'username',
    'label' => 'User Name',
    'rules' => 'required|trim'
  ),
  array(
    'field' => 'password',
    'label' => 'Password',
    'rules' => 'required'
  )
),
 'editUser' => array(
  array(
    'field' => 'title',
    'label' => 'Title',
    'rules' => 'required'
  ),
  array(
    'field' => 'country',
    'label' => 'Country',
    'rules' => 'required'
  ),
  array(
    'field' => 'district',
    'label' => 'District',
    'rules' => 'required'
  ),
  array(
    'field' => 'division',
    'label' => 'Division',
    'rules' => 'required'
  ),
  array(
    'field' => 'thana',
    'label' => 'Thana',
    'rules' => 'required'
  ),
  array(
    'field' => 'city',
    'label' => 'City',
    'rules' => 'required'
  ),
  array(
    'field' => 'firstname',
    'label' => 'First Name',
    'rules' => 'required|alpha|trim'
  ),
  array(
   'field' => 'lastname',
   'label' => 'Last Name',
   'rules' => 'required|alpha|trim'
 ),
  array(
    'field' => 'nid',
    'label' => 'NID',
    'rules' => 'integer|trim'
  ),
  array(
    'field' => 'phone',
    'label' => 'Phone',
    'rules' => 'required|numeric|min_length[11]|max_length[14]|trim'
  ),
  array(
    'field' => 'street',
    'label' => 'Street',
    'rules' => 'required'
  ),
  array(
    'field' => 'email',
    'label' => 'Email',
    'rules' => 'required|valid_email'
  )
),
 'changePassword' => array(
  array(
    'field' => 'password',
    'label' => 'Password',
    'rules' => 'required|min_length[6]|max_length[12]|alpha_numeric'
  ),
  array(
    'field' => 'confirmpassword',
    'label' => 'Password Confirmation',
    'rules' => 'required|matches[password]'
  )
),
 'addOrganization'=>array(
  array(
    'field' => 'country',
    'label' => 'Country',
    'rules' => 'required'
  ),
  array(
    'field' => 'district',
    'label' => 'District',
    'rules' => 'required'
  ),
  array(
    'field' => 'division',
    'label' => 'Division',
    'rules' => 'required'
  ),
  array(
    'field' => 'thana',
    'label' => 'Thana',
    'rules' => 'required'
  ),
  array(
    'field' => 'city',
    'label' => 'City',
    'rules' => 'required'
  ),
 
  array(
    'field' => 'name',
    'label' => 'Organization Name',
    'rules' => 'required|alpha_numeric|trim|is_unique[organization.name]'
  ),
  array(
    'field' => 'phone',
    'label' => 'Phone',
    'rules' => 'required|numeric|min_length[11]|max_length[14]|trim'
  ),
  array(
    'field' => 'street',
    'label' => 'Street',
    'rules' => 'required'
  ),
  array(
    'field' => 'email',
    'label' => 'Email',
    'rules' => 'required|valid_email'
  ),
   array(
    'field' => 'website',
    'label' => 'Website',
    'rules' => 'valid_url'
  )
)

);