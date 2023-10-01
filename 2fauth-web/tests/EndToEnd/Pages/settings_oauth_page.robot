*** Settings ***
Documentation     A page object to use in OAuth settings tests.
...
Library           SeleniumLibrary
Resource          settings.resource
Resource          ../common.resource

*** Variables ***
${OAUTH SETTINGS PAGE URL}    ${ROOT URL}/settings/oauth

*** Keywords ***
OAuth Settings Page Should Be Open
    Location Should Be    ${OAUTH SETTINGS PAGE URL}

Go To OAuth Settings Page
    Go Authenticated To    ${OAUTH SETTINGS PAGE URL}

Browse To OAuth Settings Tab
    Browse To Settings Tab    ${OAUTH TAB}