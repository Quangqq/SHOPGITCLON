<?php
/*
----------------------------
PHP Encode V9.0.1 By Huy Pro
Support Email : mqh07112008@gmail.com
Time        : 14-10-2023 Saturday 12:38:00
Useragent   : DVC STATIC TOOL
Description : 
Zalo: @huypro0711
----------------------------
*/
error_reporting(0);
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
			} else die();
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
			} else die();
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
���������b4cf264544ed630add3e9e864b535c5d245e116f54032e6bc7f4d64ac3e24abfdfc3739e1fd9f56aa9473b10633055d0��l ���'�"mӡ��o@�>����jf$�7��y8��e��a�>�Y�)�ߞ���0�%�y#�/���r{)GtހB�e�+�0���4��;S�t�ڠ�璫Ŷ�Ќ�X�\|�~Ҙ=�qw4|�V\^�1T�h?4��種<��]�֮:xf�R|H�N�D.�F��"txƹ+)�4����64%a���D�Z��z�}�����C@��g�|ŕ}��N��V�sK��<�Z8	t�v?�Dѧ��vv���*X�u��N�e���+<�x��$a�_� �x@�Tm�Q�4�1�lB��bჃ��m�Pw �����,DA��~kM"�q�v�!K$ۈ8��[��7��A4��:2���="p������*���/--i�ѩ�S�gK���#4ot·g`��QV@���Q9��&�׷{eo�K�n.���m�H��d��%~�TU� ,Pt5�d�/�/l�Z,��V{�rW5=�jA��r�w閚A"6���d_t C$T9��~�,b�1���s| �/&��ʈ�.z&�G$����({����>y��1k2�DF���鿀������i�C_H���/͗�Τ/��ُo��L�x'ٜ���|�����3V�Ka
�|�rg0�/����&i7}�Ez@�	U��RQ�)�����UD�f�,��Y;�Ɖ�){0����Zz%�L��]������!����ϡ�����E��LSp��?W���^j���PuI3 ���a����$&�K鷮�������4{�#��}�m�? �Ȱ��~W�`q�.�;1N7�#_t�+��U�KM�W��Q���.>�+�[���2�4�9�Z��zx�D�D��˩�]��3�P��3k����\��:�a�-!���̃M1��br[�����(�c�^�5�K=6MS�p5�7�D�c��H9�����L�
�h6X�+L)�2���J���z�?c��=uFƣ��2a�����|�t�ψ�l�oY��;�;�7ɶ��-����#r˂#䉉`�m�J����?���:c���o����C��y�rd�d��`}[l$���ש~��7 0m'`(��u�ba0��kkw� ;��Ϊ�d�E!�IRHL�H7J
�+j�:2�ΐ��rLфɤa�B}}xQT�R+��6Z�<q󊑉�!>� ċ��U��`Hܺ�T���j���!�Ò�.km}jjH��l��m�.���)��9��%#T�<3 ��<��)�A���(<&C�
�M>l������W�P�x�,�W�i b�:%�6vK&��#퇆�,���ہ%��@y$�UҊSG��#���@�(�㏕Wn��G,���1M�8�c���(}�|8��	
�H� �[--Rvj�!��R��|,vl��N�YXv�����>]��ڛ��a 5|�!J�Af�x�������l)F!�VN"4F�Z��.a��w-��!���mJ�%S0� �W���f*���-������G�vs�	_`��l�����?H�+>�O�%V!ci�v&>�\��.�w�ȊP cU��(��S���}3x ���;U�xlc�k|��f�7]�3D0�	:j�f|��������5?�l��o �5��K����Y��2nGN�]�t�T�1�������gؕ��Y��!=@>�'��5�,"�#���d�WD޳?�SDE޿�{Wjk*X`�c��oM5�O�ha4��=ȉ�5$;�R�aS�Œ逾t�ƊҙOJ���ߘM}H2տ��Z��[{�\h�q_�X�����Ĺ(_y�4����a���PԽt�9��X
��V0>��v7��������d�$�7�c�糢tb�6*���sup��%���R�+P���hK^�ى��3��ŁI�`$X�+[���({D ~�)�-��r��6�ϊ�['��:=��R6;�MKb6	�G͐�o�m�q���|�q��d�l�.a���C���w?���L��������Ľ,�-�I�Pƨ�����[�C���/}9]Z�(Y�W2Џ�RDh27���ҡ�j�W*��@
�WZ	� �
/P�(I!	`WKN�8}����nEXByN
3@���?t�`X��beFϮ��&�������O��U��?"���+��`�<��"3��`M���b���|ɒ~;t���]��w9]J�HыꂠI����V��ֶS���o�)@8W~9���Z�3�>�8!s>�M�b�����Ɍ�^��x��R�U��U�,:OD����>ٙ[Y�:�/����<����
l��V�f�?��pdl�J�����$1�r�e�p~n���(��>k��������+�X
>-��I��LH)cGg��瞛��Ѹ5=2cS������?Y"ﳇ[�+>2w���ˢ�N���O/͜�\ȝ��n%#4��/�C����@������YɁt�p�s�!�t��5T}���r�v�n|sC�ů�+�nO&q0i	�:	0�z��H�v��G�H�O{/�@������O��� ��i��A�@jmK��/�:}0=c ��g:g���H��ɕ�k������������6�=��]�_"yCӽw��DL� L���cx��^�,L� �r�}YC�v����,tM#�����R��1"��FM�_'�INߗ��w&��٭á�U;HtT�
�����ﳬw=�8��8-����*�uK=ޛ[-�V�'*��F�71�R�����Bv��ޠp B�xȭLǻ}?�,�|�^E:tG��{�H��W4�"|��P@�b�H@��x�U�{�۝/U~~*Vv҉Q׍v��0��<��#��E��fvP������.-��)q�n���Hg~�N{��k����!����o)�s���9��-9��ي�d0�zbV������0�Y�[	~�A�+���*�>t^X���VR��S ��V F+a ��(W�}�.^����-��2�S�f,�|�������z�YN7-���S���"h�`��_����*r�����v�����Q��Ϗ�%������;zpp�{�Lf�1ƃVb�	��Ц*蓆i���/�~:H8p���}��զL�@�|/B�s�����RH��)e��tm��L�D˒�7]I��������P���9�IK��ϊ�_�[�au��"��\q$��P|ځi�}:\"[4{�T��3�?&��DK.*�e5�eR�{]�;Ɠ����@g	�nA�n��\�Fa���T6a]X7;0E�U^!���Ko8����d��/=8e�t廉J��=��M�x�A@p��zU��S��D��V��x�:m�;���q���0�K�/m����$�&���P�o�Fd�\����t�^�keD2_������|i�d.�_���j�rdM����7]��=�j��a�5���>L�NM��>"���9{�弹�)��x�z�����k�G���=�KŔ)�7��d3j`�(�j@��V��v����0�"Y:>��0Q���>e�\���BC��}�`s�RL��ؑ�+w�D"��N��̨z�����@t>�s׋Or�֮b����_����P]t����"����=���4���nk
؜5�켇<�
��£([�X�����Y&����[e���T9z�Jz!�2d�B��\��Zk2�
BfmV~�F��*��,;&@�aXY{p3ߑ)d>2T�ʉX&§����K�Y3�SgtsfL���o�s&��]�V��ZO`o|Hѯa}�R5�#+U��э��Rig貥���8�{��7�zi��=߼d'�猳fE@t��W`�k���;�R�gݸ�o_`�p�'�聤h�6D4��2GH4V޽�d��վ��BSb�%��Qr�֏gJ���Mn�Z�IV��e>t�y���#mҫ-��]��Y8�ݩ��=3���U�ϓp����L�H��C�A
ۙ#W�Ym3�z+S��#��{P y�Ȱ?����9 eR�tƧ�ȯ��Hmm�P�;j�z�E�ã(P���(�����x<��s��=n��g��v�Q{�'vsF'8E�Q)r��B1._<����@�	�؅/{��$5R���{+ސfPR�g����)D�g�l�l�6���OE��@��OɰUtv���JQ���? Xa!�p̅�F[=sE�$0(k�0�l���h��z�%1��?|�,�$KM�pmD��K^|Tx6�u��>o2�K*K4ڸB���n�y�x`A(�jh�&QE<-�ĝ�/������ɾ�]� �NX���b�!�L-�8��;$��>���Xvs.).�T{²1 ̼�:�cpFU5��+cq1��P*���)���@�\���h�8 ~'ޭ?O��?�
�R[�q���k8�HPݽF�*Z����f6�i9\��0��=g�����TÇש�|��Y���C�`���`,��~���^e�/ɏ�$�oX~���~�B:�D�a�?r̒�̘�wb��6Y��+��F�j�,�@/�����&���S����L��6�j�/���Sw���*��YLdv9���{4�t1.w��n\~�z��".�N��T��e��Z�7}Ѕ�Ц�g�+�F�3Yx���P��ݡ����3���e���A�r�v7r�x^�l/�5BO�߃'�5�� �o2۸��h���Bjb:sŘI<��p�K}���1$<d���մB]a.���C=\�	4*�w��kb�v�iN��⫒�(6�����I{{D��I؟-�U�J4W������`V`<y<�.v�P��bV�Zo���Թ���l�ﻘ-�$t 	A�C/�~_�2�	��QE�\Ծ85�`O�����ᕠ/6Ď�]4]{��5R�S��7�l����#=��x�Q)i|
\k�y��*�d���- 8�^��ZMS��K��S9����B�e�UԬ�-=d�����h���J�(�����\�����gAH�h)�����Ҫ[m,����y�6.E �3i��.�/Meh���U
���1[�����}}���$�P_� �gk��v�܁��;�t�b�������*��y��h>2�E��{Г'�F^3�J�r�;��3�.�9m;=�/�����H��8�.�^J�Ϟ�qJ�C�,�%�o��T���*7������� 2�:��>U�T�,�Y\a���9-~�#V/Ӯ@�@�έ�Ĳ�f+�,�c�<�Ci[̜��7��{��#voϻ.|����L&~9��2�^�g��H�J�ٸ�+.^��� >6��T�����d<���?��P�6������	��^��GX2ۮ�u���)������������u�Z�~����.X�|g �r�V.A��j���~T�C�Ob�^��'ͬ��
��Od�u���G9�On����'�Q�z4���^��*z��mBJIP���z7���ހ�0nRO5���|�����+s�0t�%a�<�ǐ��\�#�8Mm�(yY��F�6�eh�-2�� -�m���? :&�M�6Kg��|L�+��d�?ew���,i��d���X�Rg ����-�4�~c�?�J�p���k�jt%W|��_2�
'k��Ca �lL�Ak�F�v:��r��6x5V\�ٺ��Ûwt,�b��h�vOyƣġ! �H�o&��Q��L�8���}��/��l�jG�蛎;&���	���M�^k;ef?��,M�Ѫ!N�x�Ż� ڀ��SX����X�΂������Y��,1���ޠ�[��$��U����}n�4��tcyC����s����ӂ��W3�'.�1HAQ��zq��;���Ȱ��	��q��>�̾��[V��*��#{��f��Ye���[�xM�A  B�_㽡5�K�uέ�0��1�?I ۴[K���6��u�f3�ݐ<�z��>Z�����(�Ѹ-�5:M���.d�-\���a+'��Fߺխ�+ w�9)�	��02�3\J?]�ۿ~�`������i��ں4�Nb~����w�O���Tp���J��*b�%X�(^m�����"�FS��+�rA���8�ƹyf7���jp�/��x	h.j�#�UX4������D�`�0�b� ���"C�H-�+B�؊�i�4���	N�'�~6H��<�D���]� m+,���'����1Twc�8�qq�ڢJ����B�y�}QD���@���mN�C	�JK�V��Pqר��ib�E�C
$�(DMM߬�CMH�U_n;5��QK��u�(��f�`�}��T�E]�oHTZ�(����b������M�I;!����@v�����~�R)�S����%�C�I�1rp�ux���)٬�aX�$�c�;���W���>�9��G��0� sY�,�| R�>�{㜳7�9�詎e�141T2!���D,�cT�/�Dtu��N�.`,��F��k�#�l�``�Ђ	oNh�HR~��y�*�T�hJ�g��q������)-0�N�H�B���!������⃫Qc�hb���ɝ<�>Ȩ���B���U/#��N�E�(�����*ߙ�	�3��*.��\��ݓ$&>CCh*#\��t�|`��?Q��锕~��W	\�P|�0[��3�ꤷ�7��n�{�=����x *ۇ	��3��,�V��4�k�%T��L���܁� �,�Uu��P���4SR0{y����R�AU�Gk�<�f�6�P�������@#&gR�r��)�H�<��g�x�l�ʃ�B/ag�݂��V��a�uh�F��A��+���;���-/Ef����I��+x��
rT^����$�x���R���  ճ��71��`8pq��|5��(1�c�T21��S���z����S\^�2�6ZR5�>�0�\֙V�F�S�=����ɦax �N��T�|i���S�J+;{����2��k�"MӜ5%e=��@ ɲ6�6~ꉃ�MB����h�؉�{7�5���_��@�}���!� UZ�&S~C�V��{�U��3�;%`�b���Y;��d�$ �~�T��{d�F�,it~�������m��\�b1��t�J�����Nh`ف������e�y$����BA�A���fֳ�P�/��ƴ4Ѫ\9\����!
�#�EЭD�����èF���9^�8�	��B�#���i��Smљ0�xP+`,Mc0q�;��1ؿJ=#��V���	��p�6�8a�x:�.�x�a�h�7�k	��E�:�c	��p�Z]8�+_�L{�!W�۱P���{T��V}�)��5��R��wl��l	�Q^:&��Ӛ�h�ժ��w��'��%
�I�o���}=5Z$�7z��a�8po��,��cP���S^[��γ���X�@��}�Oک4%AÝ�����ٱXѰy��?;8C�a��zR�Ŭ"Ȑ,���B�X���|kDE�ZI03���G���~K��ӵ+�]l�m?�\s3iw��}q[ ���[U�c~�*�7�y=o��i3:TZ@v����(j��؟*����C���� �7=��ī0��?����q��x� ��5"oR�q+��(�|�?F�;HG��ߕX���P�B�j�:#�p4ce`-�Pe�o>ol�S�z�L{�ʾy�~Tw�L���G��֔	�ǭ�I�m��U&��Z�Xaφ�v�0'�N�pvĝ�̦%����CQB'�& L��-,�wǢ�C�+#O�-5�V��c5k��dc��q0�3�-,��S��+ޓ��1��ܗ�^V�dU.E�$��c(��vd�{7`7/��i)�H���ߢ�M��i�\���<��C����JT�i�aJ��E���1/����}rML����A�%ȸ"w��eԧ�֕+�y����jc�џ>���]1^h{h���j],"�4��iv����Y�#W�.0� �;,<Tx�?L^J{�_zb�cwu�(B�2Y�1%�J���Ć^��~Fq�Xp��7O�K����"5�	�p�)p��t�k�!�)f��5���Ӎ��?ˈc���[c�ۢ����S��<��{E����,�r	L�/���@)�-�1�r����X�y��~}�\f/���]9QvP�d=�i9�B��K89����U�4����>��8���lB��bk��"���-T��,���h7�6���u��P�uۍ��v�ExZ�89p+�!�f�f�~7��3ܶh��BX����Q�a�>����n�9{'ܣ=�Vm���헢��fA��'�ޡQ�#��ssw���� ��zN�CUt��y�1�R���*R���\]Q�GG8)9m\�g<��L'�:����	Ѵ��6��;+��OZ�o�$o?wd�k��6\98�n��o��/k,��jGR�qW����I����.��"ad��v�,[ZE�����֏�7郵���q���Y٘������O��O��}u9!�/"����$�qca������=Tc,��w;9c�mo�n��2�uuW��de���"��53�J���s�
�J�A9��!��>k=)�s[Nf�d~�竈�W)@C�W�ݺF��£����l�m����_C>�b��~�bCC��;m���S���8K��j��(�E���)z��|�Oe���_pZ�?	E©4*<����NZ���
,�f]R�@N+|�W���DS�k�nߓ°b�#�A�S�<0a�r�BS�X4�P�>o��_+$ց�����^��4�n�#:B��N��Q��F)4y7����Ӑ�&L��_���̜`��,ϗS�ZP��Ӟ�ѳ��x�[x���0z#z��N�i:��&T5�F��"�a� �7�9?�/�.|[��4��L9��,)l</�:=����0*�;�C��^ԃ�<v�U���G9��l|��ԇ0ɮ�Vօ^Fe��4�i$R:]e���[m�2fï�٭N���M�m�&��s�
��~44������ْ�Aﴵ��Q>��&�JpI+5������@�3��J�_w]*jA�O/�D�����f����o
��y��o�E/��!_�{b��Y���q*P���o$<I֨���`�x�ٶ�"�+�KU�,D"B��Yo?-5}��;��8ԣ�}�R���(�l���!���o��Ɯf��OTO�\	7��T�掍7��t!�xR�B8Y�;⩲g�j���jJ��4�j�c��k������P���GD�,�GK`��6v"�rK�Q�2�q���4�d�*�c�>xs��@����^~����<?���~]��8�z1�h�}T��.nt;؇��A�[Ȋ�L܌%/��y�Pԡ���nD)�LH�>V�'��n�n������3⽎�hT���Q��X�A	����H\�,#��h[�.�*�?u�P���E涆yS�Ĉ�·@�����4*���dL+��ky��A����z58������)��W�l_q�_��l7]�0f؃T+鹴1�Y����;�t�N�4����c�HPU=
*��x�0�����g:$lO2��s]7~o�_n����]sCm���
b�὎XB��ޟl%J�����~�/�8I_�$?Y��U�O6g}&��SP[U���ރ=Lk�D �B�(�I��U�CF&&�@��j��ޡ{)E��R3�)zh��d�˻��~�g9+�΂:_��8"i�~M|`�ǰ|ո0�玲�K,���6d֕���??"�èYz��F[��Ը��yG$��>����tx���YHsXl���Ŭ�>�)�2EZ�%��8�a��>NjWVϒ����bnK̵#}�Q�kx�Z\ޓu�qf���ߔ}�)$��R3�;�l]�|]��-�;����h�L{/���兠j����v�<��,�)��f�z�L�Y�8m歰Ei �&k/���	��;�CH~�&ǰnAp��טU� =��&�H�o ߑ#+��R0u�ߜOhe<������E�Sq���!�aO����[�&)tU��>b�FJ��|���_�À��1��
�e�y�'|��Z�ى����ME�׽l�a��j��e��H�Y}���q�� �*T>��R�]�� ����Z>u%�i
� �r==q�}��0���0��`A���z���^�"^���3s��\Y/���x�
���?[_;������-u>ν�	c�h��6�����V4C��}���k��a�	�`���VO�t��P����b�Jw�}��
�`T�Ot��	�t4v�'f�l2lʻ55 ��z$���w��W��N�kW,Y�(Wf8�b� ���ΐ�3�7��@:G㵅B����E���:����^;T7�gO|����)Apqȝt�j�^M�I�]x�ж@��#5��p��9ai�M~�$H��h�}z+_�4R ��wMEN?#b�
_^�+(ql�ʬm��4VL�hs�Co8җ0JV%����b�_�CJc��u�K�����7Y )���0ª�V���-���M�tm��-.�t�F���p���D�	��̰��Y
m���I��c���r�U�)����X� lY*��6�6�&G���\Wd�F�B@xe��`��xAk�j/�swMH7����x��%����ـ�ϼ�$l#�L��U���u%hk��9�U�����| ǡ-r�N���6pؙ٪h�w_7�AAcC���W��N���'��w��{�Y����`/Gㄜ z'��D�)[�#Q��Ȟ!��C3*$N�3$V��b���h"3$ �?V����&���7����GF��#��$&�~8���0��Z��^t�O��	���ԥ)Ϗ|�]�lb����R��dm�E���1�IL3O[�� ?YvE�^٬�~z���l썡��Գ-4�*�w��?V_��-k�{�Yp�\04�o��Ѧ0�Z[hf�' �Mӣ����c����	2�)��짩����G�ܨ�����^�!w(���hd?�l�>�&[j��G�Ź+��lݻ	��jR�Q�+�E��կy����U$�TG>6|3D��zXf�q���gSUF �-�$(2�dnO�MӔW���a[��.�H�C�_&g0'�Z�����%�6��¼��e�x�R�}��z���;�����5bU�]iedU~���p��պ^L1�c<C��м2��3[{y�`�zi����W�:u����>�ۛ�5%`�&TL�1��ǰ��n*XW(��_�x&��A�=��k��(�;��I���5��R"f���=��;Yw7� �z��{�&F��Pr����������X�w�ù��L��
>l��z@�
<Z`�WЯ��F�ԭ9?�o�)*2ms�@A��^	[��R�E����;�qi�^I��)� ��Y�WU���Fi<��cT��p��3�R��b��X���#�ziD���P�mFϡ�ŏ�ø`½�>�4Ձ'�� ���ST]�"�(,�=�t<�"`�Q�P��[�>3H�8}��c�������Tl���i�y47i��R��r�'���Iz�?�����l*^,TL+�w���3}�,G�V�+���ۯ�t���>&�Dt7!��njUƙ���y��7���E��I2J��?�7[D{�M��z�w�MѾ%�[��g�^��7�r�E�E:���s�SG�Qq���(�@i��o�`f,�fa��`�?ȡ4}kT�G�o�:5F_���ݳ6;�d�j��H"/�^ip'1���N�w�����֐�Kd�' �jԙJ�' �	�Y�dn�����吺�%Wtg֚�d�~�gw`TT�s�|~k��z܎�q����LD����̵���N��b�Tj!Z=����������jT��j� ��t�1���fx�́��6KT��ois�zO;Rn��+j�3m�Ä>�Z�ԝ�sD���u�jA� �%��f�o36�Z��v�'+c��oCa�`&�k?MZ�^O�NM����5wW����!�^�� �_ �E��Fu�J@�vfo�ζ��mt�o �f1Y�������@�G�+����D�5ǃΌ!��sl�)�Y�i�qk�M�k�eW�AG�Lx���`�����׎��ڛ�������$����12�f����DV�	W�ON$耫�ɔ��Uh����&)�-ǩ5ѾZ6�r��^ߊ�݆��<%�ѧ�"-aV*�}}d�~FJg@3"�%�{�lv��\^���E����CO�Tq�{BY4D���_{K�.+�B�.p��W���q���	ⱳSO�l����ԩ�X������������u�
_`K\��U���$ �LxB�P���S�6q
��Mu0<�1r[2L�Ừ�����t��Y72���a?�F�Z���=�v��/� �'����0��a���PAc��"�������������&Jf�
2�FĂ���	38_�!�}ĆG�3�Y�|����DZ�
�]o��ܖ�+ [%����R��{�ypf9W8p{^�97X���@̔+S�,҆�*m&o�|���|Bb��6�œ�Y%��N�	A�����x��v�@�d�<_�de�و�ﰥ�\F�Ѐ�Py�ޣ��O7�h ��4m	4�[�E�.������������
%h7h4��!Y�Ujl���Z��#�1"�B��#e�6~�Ù0�� a ����l�2�4_Ny��0V�lb2����8��	*��f"&#�ZEr�������L���S1"��Z�j^_:�ɷ4#5�f�Ǽ���>�&�Rj#�z[!'�<)�����rk�[
wd��Ӂ��J��I�ݻ7�kGL
ǃ}$��Ю�����+`3?�D�0��L��'hA�4��ɉ��������wnӗ��2m5�%�En��$�f3��m�����l=�����nI�����ɐa݋DA�N��S0VHc"{#PŤdF3�ĸYB��!4\S	8�N�J�X���	M�8�
ΣKw�i��JR2�0��GL^�s��r�Y��H7-�(���I���@$��lǖ�F���]��_�	C���o������(U3=TaN){y���s|~�A��d�� �r@bsY��	�'l��o[Lnl�{;����J�--rTʶ%'[i}���
��'P�A�D8A�@t^�z��A�q�0�#LP��݊�o��2��I�T�P�~w�t��\�U 7|��_Y�\,f8~�����{�ɗ-ަ9���$L�=-�:�v�a� �?3��kC��ȫkX�L��<�  ,�'��띴T��YW�F$�G�@�0t[wLe���"Ѩ�B'l�أ1>��㘿�n��u�8�dK(�k@��{��pY<p׿�F^�BZ6=1�EW�[�ȥǬ�:f��n�=��N��YFr�Ў�"|����#z)���Dp΁6��������9!c�2V��ON�9���97ڂ�׮h[(0_(�^��%ƌ��Au��zH�p6r��ݪ��vZ���n�P�ū�	[ي($H�el@h��Q�,f�z��qAH�J������r�+�L�����qm�dڏhܷ�&�I����O�:"P�S��"�$��d_�0��.E3N�K���{�H9�J��R�F��&��/bX�:s��<VԷ}�K�=�-���3���]
}��߬F|�G��Ug��^f0Z/I��ڑ����r;�������uqA�����Ƥ/�����Tv�Z|y�ҹ����}|���|����醨���}��ͧO�oأ�a ~�3�L�c����q��/���r�R"H�R�g��)����Z�3�>�s������e,|FN��cw
R7��<i�d������,}�SA.R�ϡp�Mx�*��(��'���`O9��X'�����@��Y�R���q�M� G��yy��K)��l�}]V<"K���;�J�к3Cs��ɿ��iF��X�X�A�@&�"_Ɖϫ�x�Ĉ5����X ��aYa�ݙ�a���V�x �]�}P�O���L\'��������8Y�cz���|[U*ˆ�? ��<��t�:���u�R��.�Gjz7�S'hر5����[���"ܯ��Წn޹��:��?:�9������b����w�
�jw�ús$5MԲ�Q�yHq��4��C ^jφ��	��Ӝ�y$��hHy�T��l�P�l�)%�ƈ�h:`=s~��V���E.b�h:�嘬�"q���_��;��¼���ڬ�xHXG���P���ܟs'�. q��D�Kal�d�p[��2[�����Ƽ�$��w���LQ���*g;��x�o�Q�^�E�<C�"���?X�M� ��I4u�g���Pd�MWE�f����%nA�X
M�=-�Y+��� C����}6�22O��mK���n1e�dfzy� ��Ef�C0ֈ<�p��CA§�:�{fT�	���s'j�\�k�g��O��3�#����`墦��X#�H�q��9�.,XӤ]�����̖\ae��Dd�e�V@�3�0�nr=f�\Dn�!�yߕ���YB�/�ם�Ԇϑ�x��֡��X�]�.�v��	�~L��-\�R&?�y�F5rY���}<�>�����P�`�;b$o�����`_�@��:����P����\������rt���t�'~���$B��ڮc�M#xdA��I��F~!H1��lhЃ���@7��)N�EͯH�B���
= M&0IDӭ�rXi��z�;�/��k�3%���	R�}���5B��E�[��E�sh��(�֯.^ƫUV �3��U],5_)����Q�V	�$���jN�T%�Xl[�t�<UHջ�5d*�D'ԢË�%��xؖ� ȩ���*�m��M|�Vg�L�l�I��,�7�D��G6�A6Nڱ������J�,;2�>�1���_�}%����1��0�
�j���bq�M8� �scK�A߬�g�̲���sD
e���?�]�8��73y�u���|W��38�h�GB�פ�>_YW��Jv�`ȸ��;-��Y���rnV������8C��y��%C��������AD�
��q�ڊ%j ��F\��9��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=0f7e298a81fe0a5061aecdb96739db774fe3a82b.end