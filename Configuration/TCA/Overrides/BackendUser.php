<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// enabling regular BE users to edit BE users
$GLOBALS['TCA']['be_users']['ctrl']['adminOnly'] = 0;
$GLOBALS['TCA']['be_users']['ctrl']['security']['ignoreRootLevelRestriction'] = 1;
$GLOBALS['TCA']['be_users']['ctrl']['security']['ignoreWebMountRestriction'] = 1;

// make all fields to exclude for users
foreach ($GLOBALS['TCA']['be_users']['columns'] as $key => $configuration) {
    if (!isset($configuration['exclude'])) {
        $configuration['exclude'] = 1;
    }

    $GLOBALS['TCA']['be_users']['columns'][$key] = $configuration;
}