<?php
	echo shell_exec("sdk/platform-tools/adb backup -all -f /Users/zangardiw/sites/Independent_Study/data/backups/compressed/$(date \"+%Y.%m.%d-%H.%M.%S\").ab 2>&1");
?>