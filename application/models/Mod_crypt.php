<?php
	class Mod_crypt extends CI_Model{

        public function Enc_String( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            $enc_val = openssl_encrypt($value, $cipher_algo, $crypt_key, $options, $crypt_iv); 
            return( base64_encode($enc_val) );
        }

        public function Dec_String( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            $dec_val=openssl_decrypt ($value,  $cipher_algo, $crypt_key, $options, $crypt_iv); 
            return( base64_encode($dec_val) );
        }


        public function Dec_String1( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            $dec_val=openssl_decrypt ($value,  $cipher_algo, $crypt_key_1, $options, $crypt_iv_1); 
            return( base64_encode($dec_val) );
        }

        public function Enc_String1( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";


            $crypt_iv_1 = '4568056651654915'; 

            $crypt_key_1 = "�U+�!�u+AuF@Ւ=VЏ̉�wVrȡ)Q{Ԇ\~`�ݲ)<�";

            $enc_val = openssl_encrypt($value, $cipher_algo, $crypt_key_1, $options, $crypt_iv_1); 
            return( base64_encode($enc_val) );
        }

	}
?>