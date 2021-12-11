
const e = React.createElement;

class AppNav extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return(
      <div id="navbar">
        <h1 className="myname">
          Gestion mat
        </h1>
 
      </div>
    );
  }
}

const domContainer = document.querySelector('app-nav');
ReactDOM.render(e(AppNav), domContainer);