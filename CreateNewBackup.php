<?php
	echo shell_exec("sdk/platform-tools/adb backup -all -f data/backups/compressed/$(date \"+%Y.%m.%d-%H.%M.%S\").ab 2>&1");
?>