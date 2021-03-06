<?php
/**
 * Created by PhpStorm.
 * User: aluzzardi
 * Date: 18/05/16
 * Time: 09:28
 */

namespace Url;

class Url
{
    /**
     * Generate URL-encoded query string
     * @link http://php.net/manual/en/function.http-build-query.php
     * @param mixed $queryData <p>
     * May be an array or object containing properties.
     * </p>
     * <p>
     * If query_data is an array, it may be a simple one-dimensional structure,
     * or an array of arrays (which in turn may contain other arrays).
     * </p>
     * <p>
     * If query_data is an object, then only public properties will be incorporated into the result.
     * </p>
     * @param string $numericPrefix [optional] <p>
     * If numeric indices are used in the base array and this parameter is
     * provided, it will be prepended to the numeric index for elements in
     * the base array only.
     * </p>
     * <p>
     * This is meant to allow for legal variable names when the data is
     * decoded by PHP or another CGI application later on.
     * </p>
     * @param string $argSeparator [optional] <p>
     * arg_separator.output
     * is used to separate arguments, unless this parameter is specified,
     * and is then used.
     * </p>
     * @param int $encType By default, PHP_QUERY_RFC1738.
     *  <p>If enc_type is PHP_QUERY_RFC1738, then encoding is performed per » RFC 1738 and the application/x-www-form-urlencoded media type,
     *  which implies that spaces are encoded as plus (+) signs.
     *  <p>If enc_type is PHP_QUERY_RFC3986, then encoding is performed according to » RFC 3986, and spaces will be percent encoded (%20).
     * @return string a URL-encoded string.
     * @since 5.0
     */
    public function httpQueryBuilder($queryData, $numericPrefix = null, $argSeparator = "&", $encType = PHP_QUERY_RFC1738)
    {
        return http_build_query($queryData, $numericPrefix, $argSeparator, $encType);
    }

    /**
     * Encodes data with MIME base64
     * @link http://php.net/manual/en/function.base64-encode.php
     * @param string $data <p>
     * The data to encode.
     * </p>
     * @return string The encoded data, as a string.
     * @since 4.0
     * @since 5.0
     */
    public function base64Encode($data)
    {
        return base64_encode($data);
    }

    /**
     * Decodes data encoded with MIME base64
     * @link http://php.net/manual/en/function.base64-decode.php
     * @param string $data <p>
     * The encoded data.
     * </p>
     * @param bool $strict [optional] <p>
     * Returns false if input contains character from outside the base64
     * alphabet.
     * </p>
     * @return string the original data or false on failure. The returned data may be
     * binary.
     * @since 4.0
     * @since 5.0
     */
    public function base64Decode($data, $strict = null)
    {
        return base64_decode($data, $strict);
    }

    /**
     * Fetches all the headers sent by the server in response to a HTTP request
     * @link http://php.net/manual/en/function.get-headers.php
     * @param string $url <p>
     * The target URL.
     * </p>
     * @param int $format [optional] <p>
     * If the optional format parameter is set to non-zero,
     * get_headers parses the response and sets the
     * array's keys.
     * </p>
     * @return array an indexed or associative array with the headers, or false on
     * failure.
     * @since 5.0
     */
    public function getHeaders($url, $format = null)
    {
        return get_headers($url, $format);
    }

    /**
     * Extracts all meta tag content attributes from a file and returns an array
     * @link http://php.net/manual/en/function.get-meta-tags.php
     * @param string $filename <p>
     * The path to the HTML file, as a string. This can be a local file or an
     * URL.
     * </p>
     * <p>
     * What get_meta_tags parses
     * ]]>
     * (pay attention to line endings - PHP uses a native function to
     * parse the input, so a Mac file won't work on Unix).
     * </p>
     * @param bool $useIncludePath [optional] <p>
     * Setting use_include_path to true will result
     * in PHP trying to open the file along the standard include path as per
     * the include_path directive.
     * This is used for local files, not URLs.
     * </p>
     * @return array an array with all the parsed meta tags.
     * </p>
     * <p>
     * The value of the name property becomes the key, the value of the content
     * property becomes the value of the returned array, so you can easily use
     * standard array functions to traverse it or access single values.
     * Special characters in the value of the name property are substituted with
     * '_', the rest is converted to lower case. If two meta tags have the same
     * name, only the last one is returned.
     * @since 4.0
     * @since 5.0
     */
    public function getMetaTags($filename, $useIncludePath = null)
    {
        return get_meta_tags($filename, $useIncludePath);
    }

    /**
     * Parse a URL and return its components
     * @link http://php.net/manual/en/function.parse-url.php
     * @param string $url <p>
     * The URL to parse. Invalid characters are replaced by
     * _.
     * </p>
     * @param int $component [optional] <p>
     * Specify one of PHP_URL_SCHEME,
     * PHP_URL_HOST, PHP_URL_PORT,
     * PHP_URL_USER, PHP_URL_PASS,
     * PHP_URL_PATH, PHP_URL_QUERY
     * or PHP_URL_FRAGMENT to retrieve just a specific
     * URL component as a string.
     * </p>
     * @return mixed On seriously malformed URLs, parse_url may return
     * false and emit a E_WARNING. Otherwise an associative
     * array is returned, whose components may be (at least one):
     * scheme - e.g. http
     * host
     * port
     * user
     * pass
     * path
     * query - after the question mark ?
     * fragment - after the hashmark #
     * </p>
     * <p>
     * If the component parameter is specified a
     * string is returned instead of an array.
     * @since 4.0
     * @since 5.0
     */
    public function parseUrl($url, $component = -1)
    {
        return parse_url($url, $component);
    }

    /**
     * URL-encode according to RFC 1738
     * @link http://php.net/manual/en/function.rawurlencode.php
     * @param string $str <p>
     * The URL to be encoded.
     * </p>
     * @return string a string in which all non-alphanumeric characters except
     * -_. have been replaced with a percent
     * (%) sign followed by two hex digits. This is the
     * encoding described in RFC 1738 for
     * protecting literal characters from being interpreted as special URL
     * delimiters, and for protecting URLs from being mangled by transmission
     * media with character conversions (like some email systems).
     * @since 4.0
     * @since 5.0
     */
    public function rawUrlEncode($str)
    {
        return rawurlencode($str);
    }

    /**
     * Decode URL-encoded strings
     * @link http://php.net/manual/en/function.rawurldecode.php
     * @param string $str <p>
     * The URL to be decoded.
     * </p>
     * @return string the decoded URL, as a string.
     * @since 4.0
     * @since 5.0
     */
    public function rawUrlDecode($str)
    {
        return rawurldecode($str);
    }
}