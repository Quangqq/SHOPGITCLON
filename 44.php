<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 08-12-2023 Friday 20:58:44
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : DragonX Team
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

���������428fbfa2718ec4405a60b6f589fa1e5ced24f7ea77b4ab33b881ebde2ecf17690ba5294e4b5e31ca80ddacc135601482��;?����r����T^	�z�hf�����I�g��$�\���?��Qj/ ����ߙiB9��NJ	Av����f��Y듭_�dAO$)����CbmV�����ڞ�a;?ӄWF�oA��b�"��gXoV�gU+l6���j%:�Q^�<it,����փ��	"nR��|�֏�o�]���k���ܚT�>�^�.���*�E��V��
G=� �A��F�o�|_�j��6���L��l+���^�iS.r<���H�^��	�������Y��-����ƚ�'��J�lg�|�o����к8��Ñ	��}�EC�T+g�~rj/j�)�Pq��N<�}��V��_�Hoo�ύ����1�8<�x�L.޾��Ve�5�F�T;>��-N[��{M!�Q�LQTVB�Y���������Cѥ�ī}K����#���g��-fbI	�,P{�P�_$T��o�!t��}�i��=\�?;}Vk��mq��R�=����.s�ճ8G��1�\�wS���/�e�ɏ�?������ߏ�⾕yu�>��|'����w�����Qq����[��+�_��Q����ۀ�	;);<y���e�!����÷ݟ����ϻ4iQ���w���>o(�v�sp��X�x{M\�����M-0�����K��o�Jb`P��{V	8f��ջt��"u-��n�qa%�Gp�C�#3�p����,��6�/`�h1셴��XT��%k�;P�P���I���)"��@�c�e=%XUd�`@E&�38�5~K]o~��{�0~	_�k��?��J���.v�V��G9��=	ݟ��v��d3�����eP�g�/��=6��y'��p=�����6ɼ�`cZ���W��W�gq�\��B��h�X[ȼ���3w��6
����7�<�Y�"�=�,N�9 $���(�����#|��@�l�a�J�4��m�d=���xHw����VP�+�\��v`�z��n����vxP�诈G|:Om�(7�ܐ���M#@͑�M�Q�x(F���7��X���iV�0��S���c��,�F�	Ϯ���h�&��p���`S'�k
��c�Ef�U�$��j,A��5���^z�le؎~�y�^w��?p�zV��7�\&��Y���>C�]\Qg��D��`y�NL8S9��L6���b:�\�+Ѿ�B5�u�Y?�I�����9���A�ɜ4{��uB��%��Z�;�V았w�.	�ҏpS�ҹ����貼c�a��{s+�#�o~���Ll��*-��/�|BE`�Z��G\�u���m�Q�h�׉I,�~��2�&�f�J��lx��g��$���&R�P�2�&�`����L��.�(�.������I7�l����eX�D���dA(Eы�gh��$��$JLC�0wSpx�Zi��	͕�m���5ݦq�ds����˜҅��^kD��(��<ͣ��h��͡�^�h��j/��� 8c���qm�_��������?�HD��[P�\ɘ�p�"b�[��*{O�v����Px��5���+F�������s�K���#��R��j*�K��w*&��<�F>4�޵�,O.'�Y}��G�w__��@>c��J��h��P�BQ7J��\�����l) \_hl,��Q\��U��<M��9��Q�/���P�ӿ���u
���BMv�#�ƨt�}S���R��#��3����]���?.P�[��������5��E��6g���#����|(��P=궚-e����Y�c���*Ts������_�i���J;���tߕ%�̕W��j��#F�'W�/��Dv~��S�N�p٫����Y��J�$r�� @lTѸJ�����3���A��f;H������F�A�8���"bw�.Rs����Ӵ^��a-�ή���2���x�|���vU��Q3�1���yΔ����@R媀��Ձ���/7v@[�,{���zs־���n��>~��u�;K�E=�kt4<�N��K�lԑ>/~X�敟��?�b�#�o�qI��A����n������^p���F��5��E�[w�nz�sIl�j�dH�|zj�����a��O�ʵ�VH�+WoM��:�g�F�����A�(b!R��M���b��9.���8Rbn�Z9�Ƕ��'�ޖ�fK�˱�o�'�o�;�N��x�[�C 8=I��iNwϝ�x��X�Nv�/*�v9=��������J��Πu�CO?)s�I���"�ſ��؞��Lɠ��ñPچK>7t������ƟJ��<n�)��o����Q;/,+�ć h_,���$>���U����-۱�=�mQn�>m�����~��s9��ggk��k^�R�
o��»�aO�[�X�vcS�4�<-�̜ ���ݘ]kvN,�J*~��cf�Թ�B�G��#4�ܤo�&�J�ю��.�d��InXA@�	~�''������ַ`�����:0�bb02\���b�S���(�D�%w��Pu�˖�x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=92581ec7f6850ff0881ff824dacab18f012cd312.end