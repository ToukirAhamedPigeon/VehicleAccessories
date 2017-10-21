<?php
        $config = array(
           'registration' => array(
                                    array(
                                            'field' => 'firstname',
                                            'label' => 'First Name',
                                            'rules' => 'alpha|trim'
                                         ),
			                        array(
                                            'field' => 'lastname',
                                            'label' => 'Last Name',
                                            'rules' => 'alpha|trim'
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
                                            'rules' => 'numeric|trim'
                                         ),
			                        array(
                                            'field' => 'street',
                                            'label' => 'Street',
                                            'rules' => 'alpha_numeric|trim'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required|min_length[6]|max_length[12]|alpha_numeric'
                                         ),
                                    array(
                                            'field' => 'confirmpassword',
                                            'label' => 'Password Confirmation',
                                            'rules' => 'matches[password]'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'valid_email'
                                        )
                                    )
                                );