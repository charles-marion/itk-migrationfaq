<?php
/**
 * Link management - Functions and Classes
 *
 * PHP Version 5.2
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 * 
 * @category  phpMyFAQ
 * @package   PMF_Link  
 * @author    Matteo Scaramuccia <matteo@scaramuccia.com>
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2005-2011 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2005-11-02
 */

if (!defined('IS_VALID_PHPMYFAQ')) {
    exit();
}

/**
 * PMF_Link Class
 *
 * This class wrap the needs for managing an HTML anchor
 * taking into account also the HTML anchor creation
 * with specific handling for mod_rewrite PMF native support
 * 
 * @category  phpMyFAQ
 * @package   PMF_Link  
 * @author    Matteo Scaramuccia <matteo@scaramuccia.com>
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2005-2011 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2005-11-02
 */
class PMF_Link
{
    /**
     * class constants
     *
     */
    const PMF_LINK_AMPERSAND = '&amp;';
    const PMF_LINK_CATEGORY = 'category/';
    const PMF_LINK_CONTENT = 'content/';
    const PMF_LINK_EQUAL = '=';
    const PMF_LINK_FRAGMENT_SEPARATOR = '#';
    const PMF_LINK_HTML_MINUS = '-';
    const PMF_LINK_HTML_UNDERSCORE = '_';
    const PMF_LINK_HTML_SLASH = '/';
    const PMF_LINK_HTML_TARGET_BLANK = '_blank';
    const PMF_LINK_HTML_TARGET_PARENT = '_parent';
    const PMF_LINK_HTML_TARGET_SELF = '_self';
    const PMF_LINK_HTML_TARGET_TOP = '_top';
    const PMF_LINK_NEWS = 'news/';
    const PMF_LINK_SITEMAP = 'sitemap/';
    const PMF_LINK_SLASH = '/';
    const PMF_LINK_SEARCHPART_SEPARATOR = '?';
    const PMF_LINK_TAGS = 'tags/';
    
    const PMF_LINK_INDEX_ADMIN = '/admin/index.php';
    const PMF_LINK_INDEX_HOME = '/index.php';
    
    const PMF_LINK_GET_ACTION = 'action';
    const PMF_LINK_GET_ARTLANG = 'artlang';
    const PMF_LINK_GET_CATEGORY = 'cat';
    const PMF_LINK_GET_HIGHLIGHT = 'highlight';
    const PMF_LINK_GET_ID = 'id';
    const PMF_LINK_GET_LANG = 'lang';
    const PMF_LINK_GET_LETTER = 'letter';
    const PMF_LINK_GET_NEWS_ID = 'newsid';
    const PMF_LINK_GET_NEWS_LANG = 'newslang';
    const PMF_LINK_GET_PAGE = 'seite';
    const PMF_LINK_GET_SIDS = 'SIDS';
    const PMF_LINK_GET_TAGGING_ID = 'tagging_id';
    const PMF_LINK_GET_LANGS = 'langs';
    
    const PMF_LINK_GET_ACTION_ADD = 'add';
    const PMF_LINK_GET_ACTION_ARTIKEL = 'artikel';
    const PMF_LINK_GET_ACTION_ASK = 'ask';
    const PMF_LINK_GET_ACTION_CONTACT = 'contact';
    const PMF_LINK_GET_ACTION_HELP = 'help';
    const PMF_LINK_GET_ACTION_NEWS = 'news';
    const PMF_LINK_GET_ACTION_OPEN = 'open';
    const PMF_LINK_GET_ACTION_SEARCH = 'search';
    const PMF_LINK_GET_ACTION_SITEMAP = 'sitemap';
    const PMF_LINK_GET_ACTION_SHOW = 'show';
    
    const PMF_LINK_HTML_CATEGORY = 'category';
    const PMF_LINK_HTML_EXTENSION = '.html';
    const PMF_LINK_HTML_SITEMAP = 'sitemap';
    
    const PMF_LINK_HTML_ADDCONTENT = 'addcontent.html';
    const PMF_LINK_HTML_ASK = 'ask.html';
    const PMF_LINK_HTML_CONTACT = 'contact.html';
    const PMF_LINK_HTML_HELP = 'help.html';
    const PMF_LINK_HTML_OPEN = 'open.html';
    const PMF_LINK_HTML_SEARCH = 'search.html';
    const PMF_LINK_HTML_SHOWCAT = 'showcat.html';

    /**
     * URL
     * 
     * @var string
     */
    public $url = '';
    
    /**
     * CSS class
     * 
     * @var string
     */
    public $class = '';
    
    /**
     * Linktext
     * 
     * @var string
     */
    public $text = '';
    
    /**
     * Tooltip
     * 
     * @var string
     */
    public $tooltip = '';
    
    /**
     * Target
     * 
     * @var string
     */
    public $target = '';
    
    /**
     * Name selector
     * 
     * @var string
     */
    public $name = '';
    
    /**
     * property specific to the SEO/SEF URLs
     * 
     * @var string
     */
    public $itemTitle = '';

    /**
     * id selector
     * 
     * @var string
     */
    public $id = '';

    /**
     * Constructor
     * 
     * @param string $url    URL
     * @param string $text   Text
     * @param string $target Target
     * 
     * @return PMF_Link
     */
    public function __construct($url, $text = '', $target = '')
    {
        $this->url    = $url;
        $this->text   = $text;
        $this->target = $target;
    }

    /**
     * Checks if webserver is an IIS Server
     * 
     * @return boolean
     */
    public static function isIISServer()
    {
        return (isset($_SERVER['ALL_HTTP']) || isset($_SERVER['COMPUTERNAME']) || isset($_SERVER['APP_POOL_ID']));
    }

    /**
     * Checks if the the current URL is the main index.php file
     * 
     * @return boolean
     */
    protected function isHomeIndex()
    {
        if (!$this->isSystemLink()) {
            return false;
        }

        return !(false === strpos($this->url, self::PMF_LINK_INDEX_HOME));
    }

    /**
     * Checks if URL is an internal reference
     * 
     * @return boolean
     */
    protected function isInternalReference()
    {
        if ($this->isRelativeSystemLink()) {
            return true;
        }
        if (false === strpos($this->url, '#')) {
            return false;
        }

        return (strpos($this->url, '#') == 0);
    }

    /**
     * Checks if URL is a relative system link
     *
     * @return boolean
     */
    protected function isRelativeSystemLink()
    {
        $slashIdx = strpos($this->url, self::PMF_LINK_SLASH);
        if (false === $slashIdx) {
            return false;
        }

        return ($slashIdx == 0);
    }

    /**
     * Checks if URL is a system link
     * 
     * @return boolean
     */
    protected function isSystemLink()
    {
        // a. Is the url relative, starting with '/'?
        // b. Is the url related to the current running PMF system?
        if ($this->isRelativeSystemLink()) {
            return true;
        }
        // $_SERVER['HTTP_HOST'] is the name of the website or virtual host name
        return !(false === strpos($this->url, $_SERVER['HTTP_HOST']));
    }

    /**
     * Checks if URL contains a scheme
     * 
     * @return boolean
     */
    protected function hasScheme()
    {
        $parsed = parse_url($this->url);

        return (!empty($parsed['scheme']));
    }

    /**
     * Returns a search engine optimized title
     * 
     * @return string
     */
    protected function getSEOItemTitle()
    {
        $itemTitle = trim($this->itemTitle);
        // Lower the case (aesthetic)
        $itemTitle = PMF_String::strtolower($itemTitle);
        // Use '_' for some other characters for:
        // 1. avoiding regexp match break;
        // 2. improving the reading.
        $itemTitle = str_replace(array('-', "'", '/', '&#39'), '_', $itemTitle);
        // 1. Remove any CR LF sequence
        // 2. Use a '-' for the words separation
        $itemTitle = PMF_String::preg_replace('/\s/m', '-', $itemTitle);
        // Hack: remove some chars for having a better readable title
        $itemTitle = str_replace(array('+', ',', ';', ':', '.', '?', '!', '"', '(', ')', '[', ']', '{', '}', '<', '>'),
                                 '',
                                 $itemTitle);
        // Hack: move some chars to "similar" but plain ASCII chars
        $itemTitle = str_replace(array('à', 'è', 'é', 'ì', 'ò', 'ù', 'ä', 'ö', 'ü', 'ß', 'Ä', 'Ö', 'Ü'),
                                 array('a', 'e', 'e', 'i', 'o', 'u', 'ae', 'oe', 'ue', 'ss', 'Ae', 'Oe', 'Ue'),
                                 $itemTitle);
        // Clean up
        $itemTitle = PMF_String::preg_replace('/-[\-]+/m', '-', $itemTitle);

        return rawurlencode($itemTitle);
    }

    /**
     * Returns the HTTP GET parameters
     *
     * @return array
     */
    protected function getHttpGetParameters()
    {
        $query      = $this->getQuery();
        $parameters = array();

        if (!empty($query)) {
            if (isset($query['fragment']) ) {
                $parameters[self::PMF_LINK_FRAGMENT_SEPARATOR] = urldecode($query['fragment']);
            }
            $params = explode(self::PMF_LINK_AMPERSAND, $query['main']);
            foreach ($params as $param) {
                if (!empty($param)) {
                    $couple           = explode(self::PMF_LINK_EQUAL, $param);
                    list($key, $val)  = $couple;
                    $parameters[$key] = urldecode($val);
                }
            }
        }

        return $parameters;
    }

    /**
     * Returns the Query of an URL
     *
     * @return string
     */
    protected function getQuery()
    {
        $query = '';
        
        if (!empty($this->url)) {
            $parsed = parse_url($this->url);

            if (isset($parsed['query'])) {
                $query['main'] = filter_var($parsed['query'], FILTER_SANITIZE_STRIPPED); 
            }
            if (isset($parsed['fragment'])) {
                $query['fragment'] = filter_var($parsed['fragment'], FILTER_SANITIZE_STRIPPED);
            }
        }

        return $query;
    }

    /**
     * Returns the default scheme
     * 
     * @return string
     */
    protected function getDefaultScheme()
    {
        $scheme = 'http://';
        if ($this->isSystemLink()) {
            $scheme = PMF_Link::getSystemScheme();
        }

        return $scheme;
    }

    /**
     * Returns the system scheme, http or https
     * 
     * @return string
     */
    public static function getSystemScheme()
    {
        $scheme = 'http' . (((!PMF_Link::isIISServer()) && isset($_SERVER['HTTPS'])) || 
                           ((PMF_Link::isIISServer()) && ('on' == strtolower($_SERVER['HTTPS']))) ? 's' : '') . '://';

        return $scheme;
    }

    /**
     * Returns the relative URI
     * 
     * @return string
     */
    public static function getSystemRelativeUri($path = null)
    {
        if (isset($path)) {
            return str_replace($path, '', $_SERVER['SCRIPT_NAME']);
        }
        
        return str_replace('/inc/Link.php', '', $_SERVER['SCRIPT_NAME']);
    }

    /**
     * Returns the system URI
     * 
     * @return string
     */
    public static function getSystemUri($path = null)
    {
        // $_SERVER['HTTP_HOST'] is the name of the website or virtual host name (HTTP/1.1)
        // Precisely, it contains what the user has written in the Host request-header, see below.
        // RFC 2616: The Host request-header field specifies the Internet host and port number of the resource
        //           being requested, as obtained from the original URI given by the user or referring resource

        // Remove any ref to standard ports 80 and 443.
        $pattern[0] = '/:80$/';   // HTTP: port 80
        $pattern[1] = '/:443$/'; // HTTPS: port 443
        $sysUri = PMF_Link::getSystemScheme().preg_replace($pattern, '', $_SERVER['HTTP_HOST']);

        return $sysUri.PMF_link::getSystemRelativeUri($path);
    }

    /**
     * Builds a HTML anchor
     *
     * @return string
     */
    public function toHtmlAnchor()
    {
        // Sanitize the provided url
        $url = $this->toString();
        // Prepare HTML anchor element
        $htmlAnchor = '<a';
        if (!empty($this->class)) {
            $htmlAnchor .= ' class="'.$this->class.'"';
        }
        if (!empty($this->id)) {
            $htmlAnchor .= ' id="'.$this->id.'"';
        }
        if (!empty($this->tooltip)) {
            $htmlAnchor .= ' title="'.addslashes($this->tooltip).'"';
        }
        if (!empty($this->name)) {
                $htmlAnchor .= ' name="'.$this->name.'"';
        } else {
            if (!empty($this->url)) {
                $htmlAnchor .= ' href="'.$url.'"';
            }
            if (!empty($this->target)) {
                $htmlAnchor .= ' target="'.$this->target.'"';
            }
        }
        $htmlAnchor .= '>';
        if (('0' == $this->text) || (!empty($this->text))) {
            $htmlAnchor .= $this->text;
        } else {
            if (!empty($this->name)) {
                $htmlAnchor .= $this->name;
            } else {
                $htmlAnchor .= $url;
            }
        }
        $htmlAnchor .= '</a>';

        return $htmlAnchor;
    }

    /**
     * Appends the session id
     *
     * @param string  $url  URL
     * @param integer $sids Session Id
     * 
     * @return string
     */
    protected function appendSids($url, $sids)
    {
        $separator = (false === strpos($url, self::PMF_LINK_SEARCHPART_SEPARATOR)) 
                     ? 
                     self::PMF_LINK_SEARCHPART_SEPARATOR 
                     : 
                     self::PMF_LINK_AMPERSAND;
        return $url . $separator . self::PMF_LINK_GET_SIDS . self::PMF_LINK_EQUAL . $sids;
    }
    
    /**
     * Rewrites a URL string
     *
     * @param boolean $forceNoModrewriteSupport Force no rewrite support
     * 
     * @return string
     */
    public function toString($forceNoModrewriteSupport = false)
    {
    	$faqconfig = PMF_Configuration::getInstance();
        $url       = $this->toUri();
        // Check mod_rewrite support and 'rewrite' the passed (system) uri
        // according to the rewrite rules written in .htaccess
        if ((!$forceNoModrewriteSupport) && ($faqconfig->get('main.enableRewriteRules'))) {

            if ($this->isHomeIndex()) {

                $getParams = $this->getHttpGetParameters();
                if (isset($getParams[self::PMF_LINK_GET_ACTION])) {
                    // Get the part of the url 'till the '/' just before the pattern
                    $url = substr($url, 0, strpos($url, self::PMF_LINK_INDEX_HOME) + 1);
                    // Build the Url according to .htaccess rules
                    switch ($getParams[self::PMF_LINK_GET_ACTION]) {
                        
                        case self::PMF_LINK_GET_ACTION_ADD:
                            $url .= self::PMF_LINK_HTML_ADDCONTENT;
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_ARTIKEL:
                            $url .= self::PMF_LINK_CONTENT . 
                                    $getParams[self::PMF_LINK_GET_CATEGORY] . 
                                    self::PMF_LINK_HTML_SLASH . 
                                    $getParams[self::PMF_LINK_GET_ID] . 
                                    self::PMF_LINK_HTML_SLASH . 
                                    $getParams[self::PMF_LINK_GET_ARTLANG] . 
                                    self::PMF_LINK_SLASH . 
                                    $this->getSEOItemTitle() . 
                                    self::PMF_LINK_HTML_EXTENSION;
                            if (isset($getParams[self::PMF_LINK_GET_HIGHLIGHT])) {
                                $url .= self::PMF_LINK_SEARCHPART_SEPARATOR . 
                                        self::PMF_LINK_GET_HIGHLIGHT . '=' . 
                                        $getParams[self::PMF_LINK_GET_HIGHLIGHT];
                            }
                            if (isset($getParams[self::PMF_LINK_FRAGMENT_SEPARATOR])) {
                                $url .= self::PMF_LINK_FRAGMENT_SEPARATOR . 
                                        $getParams[self::PMF_LINK_FRAGMENT_SEPARATOR];
                            }
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_ASK:
                            $url .= self::PMF_LINK_HTML_ASK;
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_CONTACT:
                            $url .= self::PMF_LINK_HTML_CONTACT;
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_HELP:
                            $url .= self::PMF_LINK_HTML_HELP;
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_OPEN:
                            $url .= self::PMF_LINK_HTML_OPEN;
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_SEARCH:
                            if (!isset($getParams[self::PMF_LINK_GET_ACTION_SEARCH]) && 
                                isset($getParams[self::PMF_LINK_GET_TAGGING_ID])) {
                                $url .= self::PMF_LINK_TAGS.$getParams[self::PMF_LINK_GET_TAGGING_ID];
                                if (isset($getParams[self::PMF_LINK_GET_PAGE])) {
                                    $url .= self::PMF_LINK_HTML_SLASH.$getParams[self::PMF_LINK_GET_PAGE];
                                }
                                $url .= self::PMF_LINK_SLASH . 
                                        $this->getSEOItemTitle() . 
                                        self::PMF_LINK_HTML_EXTENSION; 
                            } elseif (isset($getParams[self::PMF_LINK_GET_ACTION_SEARCH])) {
                                $url .= self::PMF_LINK_HTML_SEARCH;
                                $url .= self::PMF_LINK_SEARCHPART_SEPARATOR . 
                                        self::PMF_LINK_GET_ACTION_SEARCH . '=' . 
                                        $getParams[self::PMF_LINK_GET_ACTION_SEARCH];
                                if (isset($getParams[self::PMF_LINK_GET_PAGE])) {
                                    $url .= self::PMF_LINK_AMPERSAND.self::PMF_LINK_GET_PAGE . '=' . 
                                            $getParams[self::PMF_LINK_GET_PAGE];
                                }
                            }
                            if (isset($getParams[self::PMF_LINK_GET_LANGS])) {
                                $url .= self::PMF_LINK_AMPERSAND . 
                                        self::PMF_LINK_GET_LANGS . '=' . 
                                        $getParams[self::PMF_LINK_GET_LANGS];
                            }
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_SITEMAP:
                            if (isset($getParams[self::PMF_LINK_GET_LETTER])) {
                                $url .= self::PMF_LINK_SITEMAP . 
                                        $getParams[self::PMF_LINK_GET_LETTER] . 
                                        self::PMF_LINK_HTML_SLASH . 
                                        $getParams[self::PMF_LINK_GET_LANG] . 
                                        self::PMF_LINK_HTML_EXTENSION;
                            } else {
                                $url .= self::PMF_LINK_SITEMAP . 'A' . 
                                        self::PMF_LINK_HTML_SLASH . 
                                        $getParams[self::PMF_LINK_GET_LANG] . 
                                        self::PMF_LINK_HTML_EXTENSION;
                            }
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_SHOW:
                            if (!isset($getParams[self::PMF_LINK_GET_CATEGORY]) || 
                                (isset($getParams[self::PMF_LINK_GET_CATEGORY]) && 
                                (0 == $getParams[self::PMF_LINK_GET_CATEGORY]))) {
                                $url .= self::PMF_LINK_HTML_SHOWCAT;
                            } else {
                                $url .= self::PMF_LINK_CATEGORY . 
                                        $getParams[self::PMF_LINK_GET_CATEGORY];
                                if (isset($getParams[self::PMF_LINK_GET_PAGE])) {
                                    $url .= self::PMF_LINK_HTML_SLASH . 
                                            $getParams[self::PMF_LINK_GET_PAGE];
                                }
                                $url .= self::PMF_LINK_HTML_SLASH . 
                                        $this->getSEOItemTitle() .
                                        self::PMF_LINK_HTML_EXTENSION;
                            }
                            break;
                            
                        case self::PMF_LINK_GET_ACTION_NEWS:
                            $url .= self::PMF_LINK_NEWS . 
                                    $getParams[self::PMF_LINK_GET_NEWS_ID] . 
                                    self::PMF_LINK_HTML_SLASH .
                                    $getParams[self::PMF_LINK_GET_NEWS_LANG] .
                                    self::PMF_LINK_SLASH .
                                    $this->getSEOItemTitle() .
                                    self::PMF_LINK_HTML_EXTENSION;
                            break;
                    }
                    
                    if (isset($getParams[self::PMF_LINK_GET_SIDS])) {
                        $url = $this->appendSids($url, $getParams[self::PMF_LINK_GET_SIDS]);
                    }
                    
                    if (isset($getParams['fragment'])) {
                        $url .= self::PMF_LINK_FRAGMENT_SEPARATOR.$getParams['fragment'];
                    }
                }
            }
        }

        return $url;
    }

    /**
     * Transforms a URI
     *
     * @return string
     */
    function toUri()
    {
    	$url = $this->url;
        if (!empty($this->url)) {
            if ((!$this->hasScheme()) && (!$this->isInternalReference())) {
                $url = $this->getDefaultScheme() . $this->url;
            }
        }

        return $url;
    }
}