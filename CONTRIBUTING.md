# Contributing to Pepipost

:tada: First off, thanks for taking the time to contribute! :tada:

There are many ways you can contribute and help is always welcome. We simply ask that you follow the following contribution policies.

The following is a set of guidelines for contributing to pepipost and its packages, which are hosted in the [Pepipost Organization](https://github.com/pepipost) on GitHub. These are mostly guidelines, not rules. Use your best judgment, and feel free to propose changes to this document in a pull request.

#### Table Of Contents

- [CLAs and CCLAs](#cla)
- [Roadmap](#roadmap)
- [New Feature Request](#feature-request)
- [Submit a Bug Report](#submit-a-bug-report)
- [Improvements to the Codebase](#improvements-to-the-codebase)
- [Style Guidelines & Naming Conventions](#style-guidelines-and-naming-conventions)
- [Creating a Pull Request](#creating-a-pull-request)
- [Code Reviews](#code-reviews)


<a name="cla"></a>
## CLAs and CCLAs

Before you get started, Pepipost requires that a Pepipost Contributor License Agreement (CLA) be filled out by every contributor to a Pepipost open source project.

Our goal with the CLA is to clarify the rights of our contributors and reduce other risks arising from inappropriate contributions.  The CLA also clarifies the rights Pepipost holds in each contribution and helps to avoid misunderstandings over what rights each contributor is required to grant to Pepipost when making a contribution.  In this way the CLA encourages broad participation by our open source community and helps us build strong open source projects, free from any individual contributor withholding or revoking rights to any contribution.

Pepipost does not merge a pull request made against a Pepipost open source project until that pull request is associated with a signed CLA. Copies of the CLA are available [here](https://gist.github.com/pepipostDX/78549c3a1a07527fcc75a653704c4433).

When you create a Pull Request, after a few seconds, a comment will appear with a link to the CLA. Click the link and fill out the brief form and then click the "I agree" button and you are all set. You will not be asked to re-sign the CLA unless we make a change.

There are a few ways to contribute, which we'll enumerate below:


<a name="roadmap"></a>
## Roadmaps

We use [Roadmaps](https://github.com/pepipost/pepipost-sdk-php#roadmap) to help define current roadmaps, please feel free to grab an issue from the current reposistories. Please indicate that you have begun work on it to avoid collisions. Once a PR is made, community review, comments, suggestions and additional PRs are welcomed and encouraged.
  

<a name="feature-request"></a>
## New Feature Request

If you'd like to make a feature request, please read this section.

The GitHub issue tracker is the preferred channel for library feature requests, but please respect the following restrictions:

- Please **search for existing issues** in order to ensure we don't have duplicate bugs/feature requests.
- Please be respectful and considerate of others when commenting on issues

<a name="submit-a-bug-report"></a>
## Submit a Bug Report

Note: DO NOT include your credentials in ANY code examples, descriptions, or media you make public.

A software bug is a demonstrable issue in the code base. In order for us to diagnose the issue and respond as quickly as possible, please add as much detail as possible into your bug report.

Before you decide to create a new issue, please try the following:

1. Check the Github issues tab if the identified issue has already been reported, if so, please add a +1 to the existing post.
2. Update to the latest version of this code and check if issue has already been fixed
3. Copy and fill in the Bug Report Template we have provided below  


### Please use our Bug Report Template

In order to make the process easier, we've included a [sample bug report template](https://gist.github.com/pepipostDX/78549c3a1a07527fcc75a653704c4433). The template uses [GitHub flavored markdown](https://help.github.com/articles/github-flavored-markdown/) for formatting.

<a name="improvements-to-the-codebase"></a>
## Improvements to the Codebase

We welcome direct contributions to the Pepipost code bases. Thank you!

Please note that we utilize the [Gitflow Workflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow) for Git to help keep project development organized and consistent.

<a name="style-guidelines-and-naming-conventions"></a>
## Style Guidelines & Naming Conventions

Generally, we follow the style guidelines as suggested by the official language. However, we ask that you conform to the styles that already exist in the library. If you wish to deviate, please explain your reasoning.

- [PSR2 Coding Standards](http://www.php-fig.org/psr/psr-2/)
- [Standard Js Style](https://standardjs.com/)
- [Go Standard Style](http://google.github.io/styleguide/)
- [Ruby Standard Style](https://github.com/rubocop-hq/ruby-style-guide)

Similarly for all the different languages followed in Pepipost Repositories. 


## Creating a Pull Request<a name="creating_a_pull_request"></a>

1. [Fork](https://help.github.com/fork-a-repo/) the project, clone your fork,
   and configure the remotes:
   
   ```bash
   # Clone your fork of the repo into the current directory
   git clone https://github.com/pepipost/pepipost-<repo_name>
   
   # Navigate to the newly cloned directory
   cd pepipost-<repo_name>
   
   # Assign the original repo to a remote called "upstream"
   git remote add upstream https://github.com/pepipost/pepipost-<repo_name>
   ```

2. If you cloned a while ago, get the latest changes from upstream:

   ```bash
   git checkout <dev-branch>
   git pull upstream <dev-branch>
   ```

3. Create a new topic branch off the `development` branch to
   contain your feature, change, or fix:

   ```bash
   git checkout development
   git checkout -b <topic-branch-name>
   ```

4. Commit your changes in logical chunks. Please adhere to these [git commit
   message guidelines](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html)
   or your code is unlikely be merged into the main project. Use Git's
   [interactive rebase](https://help.github.com/articles/interactive-rebase)
   feature to tidy up your commits before making them public.


5. Locally merge (or rebase) the upstream `development` branch into your topic branch:

   ```bash
   git pull [--rebase] upstream development
   ```

6. Push your topic branch up to your fork:

   ```bash
   git push origin <topic-branch-name>
   ```

7. [Open a Pull Request](https://help.github.com/articles/using-pull-requests/)
	with a clear title and description against the `development` branch. All tests must be passing before we will review the PR.

If you have any additional questions, please feel free to [email](mailto:dx@pepipost.com) us or create an issue in this repo.

## Code of Conduct

This project and everyone participating in it is governed by the Pepipost Code of Conduct. By participating, you are expected to uphold this code. Please report unacceptable behavior to [dx@pepipost.com](mailto:dx@pepipost.com).


