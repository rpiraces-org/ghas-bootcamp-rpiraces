*** Settings ***
Documentation     A page object to use in 2FA account edition tests.
...
Library           SeleniumLibrary
Resource          ../common.resource

*** Variables ***
${EDIT ACCOUNT PAGE URL}    ${ROOT URL}/account/1/edit

*** Keywords ***
Edit Page Should Be Open For TwoFAccount
    [Arguments]    ${account id}
    Location Should Be    ${ROOT URL}/account/${account id}/edit

Go To Edit Page For TwoFAccount
    [Arguments]    ${account id}
    Go Authenticated To    ${ROOT URL}/account/${account id}/edit
