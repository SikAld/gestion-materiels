
const e = React.createElement;

class AppListItem extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return(
      <div className="item-box">
        <ul id="materiel-list" className="list-group">
        </ul>
      </div>
    );
  }
}

const domContainer = document.querySelector('app-list-item');
ReactDOM.render(e(AppListItem), domContainer);