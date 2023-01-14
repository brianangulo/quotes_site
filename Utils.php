<?php
/**
 * Utils class with various utility static methods
 */
class Utils
{
    /**
     * Method that will include a file from the includes folder
     * @param string $file_name the name of the file from the includes folder
     * @return bool|\Exception returns true if the file was included or false/throws if not
     */
    public static function includeIncluded(string $file_name): bool | Exception {
        if (INCLUDES_DIR !== null) {
            include INCLUDES_DIR.$file_name;
            return true;
        }
        throw new Exception("Cannot include $file_name");
        return false;
    }

}
