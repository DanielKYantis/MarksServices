#!/usr/bin/env python3
from pathlib import Path

ROOT = Path(__file__).resolve().parents[2]
TEXT_SUFFIXES = {'.php', '.html', '.md', '.txt', '.yml', '.yaml', '.json'}
SKIP = {'assets/vendor', '.git'}

REPLACEMENTS = [
    ("const BUSINESS_AREA = 'Georgetown & Sun City, Texas';", "const BUSINESS_AREA = 'Sun City, Texas';"),
    ('Georgetown &amp; Sun City, Texas', 'Sun City, Texas'),
    ('Georgetown & Sun City, Texas', 'Sun City, Texas'),
    ('Georgetown and Sun City, Texas', 'Sun City, Texas'),
    ('Georgetown and Sun City', 'Sun City'),
    ('Georgetown &amp; Sun City', 'Sun City'),
    ('Georgetown & Sun City', 'Sun City'),
    ('Sun City and Georgetown', 'Sun City'),
    ('Sun City or Georgetown', 'Sun City'),
    ('Georgetown homeowners and Sun City homeowners', 'Sun City homeowners'),
    ('Sun City homeowners and Georgetown property owners', 'Sun City homeowners'),
    ('Georgetown property owners', 'Sun City homeowners'),
    ('Georgetown homeowners', 'Sun City homeowners'),
    ('Georgetown property managers', 'Sun City property managers'),
    ('Georgetown homes', 'Sun City homes'),
    ('Georgetown home', 'Sun City home'),
    ('Georgetown customers', 'Sun City customers'),
    ('Georgetown clients', 'Sun City clients'),
    ('Georgetown service calls', 'Sun City service calls'),
    ('service calls in Georgetown', 'service calls in Sun City'),
    ('work in Georgetown', 'work in Sun City'),
    ('serving Georgetown', 'serving Sun City'),
    ('Serving Georgetown', 'Serving Sun City'),
    ('for Georgetown and Sun City', 'for Sun City'),
    ('in Georgetown and Sun City', 'in Sun City'),
    ('around Georgetown and Sun City', 'in Sun City'),
    ('throughout Georgetown and Sun City', 'throughout Sun City'),
    ('Georgetown, TX and Sun City, TX', 'Sun City, TX'),
    ('Georgetown, TX & Sun City, TX', 'Sun City, TX'),
    ('Georgetown TX and Sun City TX', 'Sun City TX'),
    ('Georgetown TX & Sun City TX', 'Sun City TX'),
    ('Georgetown, Texas and Sun City, Texas', 'Sun City, Texas'),
    ('Georgetown Texas and Sun City Texas', 'Sun City Texas'),
    ('Georgetown • Sun City', 'Sun City'),
    ('Georgetown<br>Sun City<br>Central Texas', 'Sun City'),
    ('Georgetown<br>Sun City', 'Sun City'),
    ('Georgetown-area', 'Sun City'),
    ('Georgetown area', 'Sun City'),
    ('greater Georgetown', 'Sun City'),
    ('Greater Georgetown', 'Sun City'),
    ('Focused scheduling and communication for homeowners in the 78626 / 78628 / 78633 area.', 'Focused scheduling and communication for homeowners in Sun City.'),
    ('<span class="location"><i class="bi bi-geo-alt"></i> Georgetown, TX</span>', '<span class="location"><i class="bi bi-geo-alt"></i> Sun City, TX</span>'),
]


def should_edit(path: Path) -> bool:
    rel = path.relative_to(ROOT).as_posix()
    if rel == '.github/assistant/edit_task.py':
        return False
    if path.suffix.lower() not in TEXT_SUFFIXES:
        return False
    return not any(rel.startswith(skip + '/') or rel == skip for skip in SKIP)


def main() -> None:
    changed = []
    for path in sorted(ROOT.rglob('*')):
        if not path.is_file() or not should_edit(path):
            continue
        text = path.read_text(encoding='utf-8')
        original = text
        for old, new in REPLACEMENTS:
            text = text.replace(old, new)
        if text != original:
            path.write_text(text, encoding='utf-8')
            changed.append(path.relative_to(ROOT).as_posix())
    print('Changed files:')
    for item in changed:
        print(' -', item)
    if not changed:
        print('No Georgetown workplace references found.')

if __name__ == '__main__':
    main()
