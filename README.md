# Logged-In Cookie

A simple plugin to set a cookie (`CraftLoggedIn`) when a user is logged-in and remove it when they're logged out.

That's it.

This can be particularly helpful when it's necessary to determine if a user is logged-in from outside Craft, such as disabling static caching with nginx or Apache. Just check for the existence of that cookie, and you're off to the races.

Cheers!

## Bug Reports

If you think you've found a bug, please post a good quality bug report in [this project's GitHub Issues](https://github.com/kevinsmith/craft-logged-in-cookie/issues). Quoting from [Coen Jacobs](https://coenjacobs.me/2013/12/06/effective-bug-reports-on-github/), this is how you can best help me understand and fix the issue:

- The title **explains the issue** in just a couple words
- The description **is detailed enough** and contains at least:
  - **steps to reproduce** the issue
  - what the expected result is and **what actually happens**
  - the **version** of the software being used
  - versions of **relevant external software** (e.g. Craft, browser, and operating system)
- Explain **what you’ve already done** trying to fix this issue
- The report is **written in proper English**

## License

Copyright 2017 Kevin Smith

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
