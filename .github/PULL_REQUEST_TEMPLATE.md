## WNSI-{{00}}: {{ Card title }}

{{ Brief description of PR / Card }}

### DoD (Definition of Done) Checklist

- [ ] Technical and User Documentation written _(remove if not applicable)_
- [ ] There are no outstanding high priority defects or regressions
- [ ] Testing notes and context added to the Jira card
- [ ] Post-deployment checklist added to the story _(remove if not applicable)_
- [ ] Feature is tested in agreed devices and latest version of browsers**
- [ ] The developer is confident that Acceptance Criteria have been met
- [ ] Code meets [NZ Government Web Accessibility and Usability Standards.](https://webtoolkit.govt.nz/)
- [ ] No violations in aXe analysis ([Chrome Extension](https://chrome.google.com/webstore/detail/axe/lhdoppojpmngadmnindnejefpokejbdd))
- [ ] Branch rebased against `develop`
- [ ] Non-MVP enhancements have been captured in another card

##### * Design DOD
- [ ] The design signed off by Beth (if appropriate)*
- [ ] Accurately matches design unless there is a good reason not to
- [ ] Hover states & interactions are correct
- [ ] No regressions of other styles

##### ** Agreed Browsers and Devices
- **Browsers** - Chrome (Development Team), IE, Firefox, Safari
- **Devices** - iPad Pro, Surface Tablet.

### Peer Review Checklist
- [ ] Must be peer reviewed by one of the team members first before passing it onto mentor
- [ ] Bigger cards warrant in person PR _(remove if not applicable)_
- [ ] Testing notes have been checked
- [ ] Smoke tested
- [ ] Manually tested
- [ ] Generic test(s) running (PHPUnit, JS, End-to-end) _(remove if not applicable)_
- [ ] Runs without issue locally
- [ ] Browser/Device tested
- [ ] Code is quality reviewed
- [ ] Feedback is provided and documented
- [ ] Matches all Acceptance Criteria
