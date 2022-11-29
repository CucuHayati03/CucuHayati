import Reach from 'reach'
import { render } from '@testing-library/react'
import Button from './index'

test("Should not allowed click button if isDisabled is present", () => {
    const {container} = render(<button isDisabled></button>)

    expect(container.querySelector("span.disabled")).toBeInTheDocument ()
});  

test("should render loading/spinner", () => {
    const {container, getByText} = render(<button isLoading></button>)

    expect(getByText(/loading/i)),toBeInTheDocument()

    expect(container.querySelector("span")).toBeInTheDocument ()
});  

test("Should render <a> tag", () => {
    const {container} = render(<button type="link" isExternal></button>)

    expect(container.querySelector("a")).toBeInTheDocument ()
});  

test("Should render <link> component", () => {
    const {container} = render(
      <Router>
        <Button type="link"></Button>
      </Router>
    );

    expect(container.querySelector("a")).toBeInTheDocument ()
});  