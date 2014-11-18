<?php
/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Mateusz Macias <ursereg@gmail.com>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

class remote_plugin_tag extends DokuWiki_Remote_Plugin {
    public function _getMethods() {
        return array(
            'getTagged' => array(
                'args' => string,
                'return' => array()
            )
        );
    }
 
    public function getTagged($tag) {
        $helper=new helper_plugin_tag;
        $tags=$helper->getTopic($ns = '', $num = NULL, $tag = $tag);
        return $tags;
    }
}

// vim:ts=4:sw=4:et:
